<?php

namespace App\Http\Controllers\Api;

use App\Models\Student;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $students = Student::all();

       if($students == true){
        return response()->json([
            'status' => 200,
            'data' => $students,
        ]);
       }else{
        return response()->json([
            'status' => 404,
            'message' => 'Not Found!'
        ]);
       }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        //
        $request->validate([
            'school_id' => 'required'
        ]);

        $data = Student::where('school_id', $request->school_id)->first();

        if($data == true){
            return response()->json([
                'status' => 200,
                 $data,
            ],200);
        }else{
            return response()->json([
                'status' => 404,
                'message' => 'Not Found!'
            ]);
        }




    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
