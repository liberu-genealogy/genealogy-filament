<?php

namespace App\Filament\Admin\Pages;

use Filament\Pages\Page;

class ApiTokens extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-key';

    protected static string $view = 'filament.pages.api-tokens';

    protected static ?string $navigationLabel = 'API Tokens';

    public static function shouldRegisterNavigation(): bool
    {
        return false;
    }

    public static function getNavigationSort(): ?int
    {
        return 1;
    }
}
