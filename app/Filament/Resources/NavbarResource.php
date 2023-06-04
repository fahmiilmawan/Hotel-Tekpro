<?php

namespace App\Filament\Resources;

use App\Filament\Resources\NavbarResource\Pages;
use App\Filament\Resources\NavbarResource\RelationManagers;
use App\Models\Navbar;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class NavbarResource extends Resource
{
    protected static ?string $model = Navbar::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(255),
                Forms\Components\FileUpload::make('icon')
                    ->required(),
                Forms\Components\TextInput::make('nav_color')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('m_about')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('m_facility')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('m_room')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('m_reservation')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('login_color')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title'),
                Tables\Columns\ImageColumn::make('icon'),
                Tables\Columns\TextColumn::make('nav_color'),
                Tables\Columns\TextColumn::make('m_about'),
                Tables\Columns\TextColumn::make('m_facility'),
                Tables\Columns\TextColumn::make('m_room'),
                Tables\Columns\TextColumn::make('m_reservation'),
                Tables\Columns\TextColumn::make('login_color'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListNavbars::route('/'),
            'create' => Pages\CreateNavbar::route('/create'),
            'edit' => Pages\EditNavbar::route('/{record}/edit'),
        ];
    }
}
