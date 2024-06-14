<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //
    public function show($id){
        $record = User::findOrFail($id);

        return view('profile.show', compact('record'));
    }
}
