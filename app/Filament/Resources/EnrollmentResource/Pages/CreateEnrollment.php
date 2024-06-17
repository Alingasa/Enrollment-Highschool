<?php

namespace App\Filament\Resources\EnrollmentResource\Pages;

use App\Status;

use App\Models\Student;
use App\Models\Enrollment;
use Illuminate\Support\Arr;
use Filament\Facades\Filament;
use Illuminate\Database\Eloquent\Model;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\CreateRecord;
use App\Filament\Resources\EnrollmentResource;

class CreateEnrollment extends CreateRecord
{
    protected static string $resource = EnrollmentResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {

        //  $existingEnrollment = Student::where('id', $data['student_id']);
        // //  dd($existingEnrollment);
        // if ($existingEnrollment) {
        //     $record1 = Student::find($data['student_id']);
        //     // dd($record1);
        //     $record1->status =  Status::ENROLLED;
        //     $existingEnrollment->update($record1);
        // }

            $record = Student::find($data['student_id']);
            $record->status = Status::ENROLLED;
            $record->save();
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
        $existingEnrollment = Enrollment::where('student_id', $data['student_id'])->first();

        if ($existingEnrollment) {
            // Update existing enrollment record
            $existingEnrollment->update(Arr::except($data, 'student_id'));
            return $existingEnrollment;
        } else {
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

}
