<?php

namespace App\Http\Controllers;

use App\Models\Enrollment;
use App\Models\Strand;
use App\Models\Student;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    //

    public function index(){

        $students = Student::get()->count();
        $Enrolled = Enrollment::get()->count();
        $strand = Strand::get()->count();

        return view('webpage', compact('students', 'Enrolled', 'strand'));
    }
}
