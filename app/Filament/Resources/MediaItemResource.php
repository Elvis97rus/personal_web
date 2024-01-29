<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MediaItemResource\Pages;
use App\Filament\Resources\MediaItemResource\RelationManagers;
use App\Models\MediaItem;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MediaItemResource extends Resource
{
    protected static ?string $model = MediaItem::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Forms\Components\Section::make('')->schema([
                    Forms\Components\TextInput::make('key')->maxLength(100)->default('skill-icon'),
                    Forms\Components\TextInput::make('title')->maxLength(500),
                    Forms\Components\TextInput::make('position')->default(1),
                    Forms\Components\FileUpload::make('file'),
                    Forms\Components\Toggle::make('active')->default(true),
                    Forms\Components\Textarea::make('content')->columnSpanFull(),
                ])->columns(2)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ToggleColumn::make('active')->sortable(),
                Tables\Columns\TextColumn::make('key')->sortable(),
                Tables\Columns\TextColumn::make('title')->searchable(['key', 'title', 'content'])->sortable(),
                Tables\Columns\TextColumn::make('position')->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ActionGroup::make([
                    Tables\Actions\ViewAction::make(),
                    Tables\Actions\EditAction::make(),
                    Tables\Actions\DeleteAction::make(),
                ])
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ])
            ->defaultSort('active', 'desc');
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
            'index' => Pages\ListMediaItems::route('/'),
            'create' => Pages\CreateMediaItem::route('/create'),
            'edit' => Pages\EditMediaItem::route('/{record}/edit'),
        ];
    }
}
