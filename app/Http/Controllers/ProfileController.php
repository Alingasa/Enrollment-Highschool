<?php

namespace App\Http\Controllers;

// use App\Models\User;

use App\Models\Student;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //
    public function show($id){
        $record = Student::findOrFail($id);
        return view('profile.show', compact('record'));
    }
}
