<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AttendanceApplicationRecordResource\Pages;
use App\Filament\Resources\AttendanceApplicationRecordResource\RelationManagers;
use App\Models\AttendanceApplicationRecord;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AttendanceApplicationRecordResource extends Resource
{
    protected static ?string $model = AttendanceApplicationRecord::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('attendance_record_id')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('attendance_application_type_id')
                    ->required()
                    ->numeric(),
                Forms\Components\DatePicker::make('application_date')
                    ->required(),
                Forms\Components\TextInput::make('reason_for_application')
                    ->required()
                    ->maxLength(255),
                Forms\Components\DatePicker::make('approval_date')
                    ->required(),
                Forms\Components\TextInput::make('approval_status')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('attendance_record_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('attendance_application_type_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('application_date')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('reason_for_application')
                    ->searchable(),
                Tables\Columns\TextColumn::make('approval_date')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('approval_status')
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
            'index' => Pages\ListAttendanceApplicationRecords::route('/'),
            'create' => Pages\CreateAttendanceApplicationRecord::route('/create'),
            'edit' => Pages\EditAttendanceApplicationRecord::route('/{record}/edit'),
        ];
    }
}
