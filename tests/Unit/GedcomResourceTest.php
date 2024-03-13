<?php

namespace Tests\Unit;

/**
 * Test case for GedcomResourceTest.
 */
{
    public function testExportGedcomDispatchesJobWithAuthenticatedUser(): void
    {
        Queue::fake();
        $user = factory(\App\Models\User::class)->make();
        Auth::shouldReceive('user')->andReturn($user);

        GedcomResource::exportGedcom();

        Queue::assertPushed(ExportGedCom::class, function ($job) use ($user) {
            return $job->user->id === $user->id && preg_match('/\d{4}-\d{2}-\d{2}_\d{6}_family_tree.ged/', $job->fileName);
        });
    }

    public function testExportGedcomFailsWithoutAuthenticatedUser(): void
    {
        Queue::fake();
        Auth::shouldReceive('user')->andReturn(null);

        GedcomResource::exportGedcom();
        Queue::assertNotPushed(ExportGedCom::class);
    }
}
