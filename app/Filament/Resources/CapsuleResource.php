<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CapsuleResource\Pages;
use App\Filament\Resources\CapsuleResource\RelationManagers;
use App\Models\Capsule;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Forms\Components\Fieldset;
use Filament\Tables\Table;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Toggle;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Filters\SelectFilter;


class CapsuleResource extends Resource
{
    protected static ?string $model = Capsule::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')->required()->label('Name'),

                TextInput::make('slug')->required()->label('Slug'),

                Select::make('category_id')
                    ->relationship('category', 'name')
                    ->required()
                    ->label('Category'),

                Select::make('type')
                    ->options([
                        'ready' => 'ready',
                        'in plans' => 'in plans',
//                        'generated' => 'generated',
                    ])
                    ->required()
                    ->label('Type'),

                RichEditor::make('content')
                    ->required()
                    ->label('Description')
                    ->toolbarButtons(['undo', 'redo']),

                Toggle::make('is_blocked')->label('Banned'),

                TextInput::make('image')
                    ->label('Image name without extension')
                    ->helperText('The images must be uploaded with the same name for landing \'.jpg\', for the capsules page \'.png\'')
                    ->nullable()
                    ->required(),

                TextInput::make('priority')
                    ->numeric()
                    ->default(0)
                    ->label('Priority')
                    ->helperText('The higher the number, the lower the capsule (if the number is the same, the capsules will be displayed one after the other)')
                    ->required(),

                Fieldset::make('What automates?')
                    ->schema([
                        TextInput::make('automates.0')->label('Automates #1'),
                        TextInput::make('automates.1')->label('Automates #2'),
                        TextInput::make('automates.2')->label('Automates #3'),
                    ]),

                Fieldset::make('Expected effect:')
                    ->schema([
                        TextInput::make('expected.0')->label('Expected #1'),
                        TextInput::make('expected.1')->label('Expected #2'),
                        TextInput::make('expected.2')->label('Expected #3'),
                    ]),

                Fieldset::make('Page and Cost Settings')
                    ->schema([
                        Toggle::make('use_default_page')
                            ->label('Use a sample page')
                            ->reactive(),

                        TextInput::make('landing_url')
                            ->label('The link to the capsule\'s landing page')
                            ->nullable()
                            ->visible(fn (callable $get) => !$get('use_default_page')),

                        TextInput::make('default_price')
                            ->label('Default price (sample page)')
                            ->numeric()
                            ->inputMode('decimal')
                            ->suffix('€')
                            ->nullable()
                            ->visible(fn (callable $get) => $get('use_default_page')),

//                        Fieldset::make('Интеграции по умолчанию')
//                            ->schema([
//                                Textarea::make('default_integrations.0')->label('Интеграция #1'),
//                                Textarea::make('default_integrations.1')->label('Интеграция #2'),
//                                Textarea::make('default_integrations.2')->label('Интеграция #3'),
//                            ])
//                            ->visible(fn (callable $get) => $get('use_default_page')),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')->label('Name')->sortable(),
                TextColumn::make('category.name')->label('Category'),
                TextColumn::make('type')->label('Type'),
                IconColumn::make('is_blocked')->label('Banned')->boolean(),
            ])
            ->filters([
                SelectFilter::make('category_id')
                    ->label('Category')
                    ->relationship('category', 'name'),

                SelectFilter::make('type')
                    ->label('Type')
                    ->options([
                        'ready' => 'ready',
                        'in plans' => 'in plans',
                    ]),
            ])
            ->actions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->bulkActions([
                //DeleteBulkAction::make(),
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
            'index' => Pages\ListCapsules::route('/'),
            'create' => Pages\CreateCapsule::route('/create'),
            'edit' => Pages\EditCapsule::route('/{record}/edit'),
        ];
    }
}
