<?php

namespace App\Filament\Resources\AttendanceApplicationRecordResource\Pages;

use App\Filament\Resources\AttendanceApplicationRecordResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAttendanceApplicationRecord extends EditRecord
{
    protected static string $resource = AttendanceApplicationRecordResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
