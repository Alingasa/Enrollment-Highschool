<?php

namespace App\Filament\Resources\EnrollmentResource\Pages;

use App\Status;
use Filament\Actions;
use App\Models\Student;
use Filament\Facades\Filament;
use Illuminate\Database\Eloquent\Model;
use Filament\Resources\Pages\CreateRecord;
use App\Filament\Resources\EnrollmentResource;
use Illuminate\Support\Arr;

class CreateEnrollment extends CreateRecord
{
    protected static string $resource = EnrollmentResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {

        $existingEnrollment = Student::where('id', $data['student_id'])->where('status', Status::ENROLLED)->first();
        if ($existingEnrollment) {
            // Display a message and prevent creation
            Filament::notify('danger', 'This student is already enrolled.');
            abort(403, 'This student is already enrolled.');
        }

        $record = Student::find($data['student_id']);
        $record->status = Status::ENROLLED;
        // dd($data['full_name']);
        // $record = Student::find($data['student_id']);
        // // dd($record);
        // $record->status = Status::ENROLLED;
        // // $record->school_id = Status::SETID->value;
        // // dd($record);
        // $record->save();
        return $data;
    }
    protected function handleRecordCreation(array $data): Model
    {
        $record = new ($this->getModel())(Arr::except($data, 'student'));

        if (
            static::getResource()::isScopedToTenant() &&
            ($tenant = Filament::getTenant())
        ) {
            return $this->associateRecordWithTenant($record, $tenant);
        }

        $record->save();

        return $record;
    }

}
