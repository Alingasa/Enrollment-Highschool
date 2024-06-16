<?php

namespace App\Http\Controllers;

// use App\Models\User;

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
        } catch (\Exception $e) {
            // Handle the error if decryption fails or record is not found
            abort(404, 'Record not found');
        }

        return view('profile.show', compact('record'));
    }
}
