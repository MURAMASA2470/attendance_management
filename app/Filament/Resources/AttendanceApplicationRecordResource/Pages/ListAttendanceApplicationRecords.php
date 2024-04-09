<?php

namespace App\Filament\Resources\AttendanceApplicationRecordResource\Pages;

use App\Filament\Resources\AttendanceApplicationRecordResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAttendanceApplicationRecords extends ListRecords
{
    protected static string $resource = AttendanceApplicationRecordResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
