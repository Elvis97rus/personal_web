<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProjectResource\Pages;
use App\Filament\Resources\ProjectResource\RelationManagers;
use App\Models\Category;
use App\Models\Project;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProjectResource extends Resource
{
    protected static ?string $model = Project::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(500),
                Forms\Components\TextInput::make('link')
                    ->maxLength(500),
                Forms\Components\TextInput::make('lang'),
                Forms\Components\Select::make('category_id')
                    ->label('Теги')
                    ->options(Category::all()->pluck('title', 'id'))
                    ->searchable()
                    ->multiple(),
                Forms\Components\Toggle::make('active')->default(true),
                Forms\Components\TextInput::make('position')->default(0),
                Forms\Components\FileUpload::make('file')->multiple()->nullable(),
                Forms\Components\RichEditor::make('content')->nullable()->columnSpanFull(),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('position')
                    ->sortable(),
                Tables\Columns\TextColumn::make('lang')
                    ->sortable(),
                Tables\Columns\ToggleColumn::make('active')
                    ->sortable(),
                Tables\Columns\TextColumn::make('title')
                    ->searchable(['title'])->sortable(),
                Tables\Columns\ImageColumn::make('file')
                    ->sortable(),
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
            'index' => Pages\ListProjects::route('/'),
            'create' => Pages\CreateProject::route('/create'),
            'edit' => Pages\EditProject::route('/{record}/edit'),
        ];
    }
}
