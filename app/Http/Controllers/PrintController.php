<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrintController extends Controller
{
    //

    public function studentlist(){
        return view('prints.studentlist');
    }
}
