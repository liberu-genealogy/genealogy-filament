<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PersonNameFoneResource\Pages;
use App\Filament\Resources\PersonNameFoneResource\RelationManagers;
use App\Models\PersonNameFone;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PersonNameFoneResource extends Resource
{
    protected static ?string $model = PersonNameFone::class;

    protected static ?string $navigationIcon = 'heroicon-o-identification';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('group')
                    ->maxLength(255),
                Forms\Components\TextInput::make('gid')
                    ->numeric(),
                Forms\Components\TextInput::make('name')
                    ->maxLength(255),
                Forms\Components\TextInput::make('type')
                    ->maxLength(255),
                Forms\Components\TextInput::make('npfx')
                    ->maxLength(255),
                Forms\Components\TextInput::make('givn')
                    ->maxLength(255),
                Forms\Components\TextInput::make('nick')
                    ->maxLength(255),
                Forms\Components\TextInput::make('spfx')
                    ->maxLength(255),
                Forms\Components\TextInput::make('surn')
                    ->maxLength(255),
                Forms\Components\TextInput::make('nsfx')
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('group')
                    ->searchable(),
                Tables\Columns\TextColumn::make('gid')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('type')
                    ->searchable(),
                Tables\Columns\TextColumn::make('npfx')
                    ->searchable(),
                Tables\Columns\TextColumn::make('givn')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nick')
                    ->searchable(),
                Tables\Columns\TextColumn::make('spfx')
                    ->searchable(),
                Tables\Columns\TextColumn::make('surn')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nsfx')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPersonNameFones::route('/'),
            'create' => Pages\CreatePersonNameFone::route('/create'),
            'edit' => Pages\EditPersonNameFone::route('/{record}/edit'),
        ];
    }
}
