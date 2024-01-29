<?php

namespace App\Filament\Resources;

use App\Filament\Resources\QuestionResource\Pages;
use App\Filament\Resources\QuestionResource\RelationManagers;
use App\Models\Category;
use App\Models\Question;
use Filament\Forms;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Section;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class QuestionResource extends Resource
{
    protected static ?string $model = Question::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Forms\Components\Section::make('')->schema([
                        Forms\Components\TextInput::make('position')
                            ->label('Позиция'),
                        Forms\Components\TextInput::make('lang')
                            ->default('ru')
                            ->label('Язык'),
                        Forms\Components\Select::make('category')
                            ->label('Теги')
                            ->options(Category::all()->pluck('title', 'id'))
                            ->searchable(),
                        Forms\Components\Toggle::make('active')
                            ->label('Активно'),

                    Forms\Components\RichEditor::make('question')
                        ->label('Вопрос')->columnSpanFull(),
                    Forms\Components\RichEditor::make('answer')
                        ->label('Ответ')->columnSpanFull()
                    ])->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
//                Tables\Columns\TextColumn::make('position')
//                    ->label('Позиция')
//                    ->sortable(),
//                Tables\Columns\ToggleColumn::make('active')
//                    ->label('Активно')
//                    ->sortable(),
                Tables\Columns\TextColumn::make('question')
                    ->label('Вопрос')->limit(25)
                    ->sortable()->searchable(['question', 'answer']),
                Tables\Columns\TextColumn::make('answer')
                    ->label('Ответ')->limit(60),
                Tables\Columns\TextColumn::make('lang')
                    ->label('Язык')
                    ->sortable(),
//                Tables\Columns\TextColumn::make('category')
//                    ->label('Картегория')
//                    ->formatStateUsing(fn ($state): string => Category::find($state)->title)
//                    ->sortable(),
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
            'index' => Pages\ListQuestions::route('/'),
            'create' => Pages\CreateQuestion::route('/create'),
            'edit' => Pages\EditQuestion::route('/{record}/edit'),
        ];
    }
}
