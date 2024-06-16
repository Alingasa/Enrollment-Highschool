<?php

namespace App\Http\Controllers;

// use App\Models\User;

use Carbon\Carbon;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class ProfileController extends Controller
{
    //
    public function show($hash){
        try {
            $id = Crypt::decryptString($hash);
            $record = Student::findOrFail($id);

            foreach ($record as $records) {
                $records->birthdate = Carbon::parse($records->birthdate)->isoFormat('MMMM DD, YYYY');
            }
        } catch (\Exception $e) {
            // Handle the error if decryption fails or record is not found
            abort(404, 'Record not found');
        }

        return view('profile.show', compact('record'));
    }
}
