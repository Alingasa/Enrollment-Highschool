<?php

namespace App\Http\Controllers;

use App\Models\Enrollment;
use App\Models\Message;
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

    public function store(Request $request){

        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'messages' => 'required',
        ]);

        Message::create($data);

        // dd(Message::get());
        return redirect()->to('http://try.test/#2')->with('sent_success', 'sent successfully!');

    }
}
