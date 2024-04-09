<?php

namespace App\Filament\Resources\AttendanceApplicationTypeResource\Pages;

use App\Filament\Resources\AttendanceApplicationTypeResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAttendanceApplicationType extends EditRecord
{
    protected static string $resource = AttendanceApplicationTypeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
