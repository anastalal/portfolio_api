<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PortfolioImageResource\Pages;
use App\Filament\Resources\PortfolioImageResource\RelationManagers;
use App\Models\PortfolioImage;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PortfolioImageResource extends Resource
{
    protected static ?string $model = PortfolioImage::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                ->required()
                ->maxLength(255),
                Forms\Components\Select::make('category')
                    ->required() ->options([
                        'Branding' => 'تصميم براندات',
                        'Branding2' => 'تصميم الهوية البصرية',
                        'posts' => 'تصميم البوستات',
                        'motion_graphic_and_montag' => 'موشن جرافيك ومونتاج',
                        'websites' => 'تصميم مواقع وتطبيقات',
                        'logo' => 'تصميم شعارات',

                    ])
                   ,
                Forms\Components\FileUpload::make('src')
                    ->required()->image() ->imageEditor()
                    ,
              
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('src')
                    ,
                Tables\Columns\TextColumn::make('category')
                    ->searchable(),
                Tables\Columns\TextColumn::make('title')
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
            'index' => Pages\ListPortfolioImages::route('/'),
            'create' => Pages\CreatePortfolioImage::route('/create'),
            'edit' => Pages\EditPortfolioImage::route('/{record}/edit'),
        ];
    }
}
