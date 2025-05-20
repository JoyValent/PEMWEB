<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\PasienResource\Pages;
use App\Filament\Admin\Resources\PasienResource\RelationManagers;
use App\Models\Pasien;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PasienResource extends Resource
{
    protected static ?string $model = Pasien::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('Nama_Pasien')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('NIK')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('Tanggal_Lahir')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('Alamat')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('Jenis_Kelamin')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('Golongan_Darah')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('Gejala_Penyakit')
                    ->required()
                    ->maxLength(255),
                Forms\Components\FileUpload::make('image')
                    ->image(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('Nama_Pasien')
                    ->searchable(),
                Tables\Columns\TextColumn::make('NIK')
                    ->searchable(),
                Tables\Columns\TextColumn::make('Tanggal_Lahir')
                    ->searchable(),
                Tables\Columns\TextColumn::make('Alamat')
                    ->searchable(),
                Tables\Columns\TextColumn::make('Jenis_Kelamin')
                    ->searchable(),
                Tables\Columns\TextColumn::make('Golongan_Darah')
                    ->searchable(),
                Tables\Columns\TextColumn::make('Gejala_Penyakit')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('image'),
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
            'index' => Pages\ListPasiens::route('/'),
            'create' => Pages\CreatePasien::route('/create'),
            'edit' => Pages\EditPasien::route('/{record}/edit'),
        ];
    }
}
