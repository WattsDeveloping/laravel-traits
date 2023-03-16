<?php

namespace App\Http\Traits;

use App\Models\Student;

trait StudentTrait {
    public function index()
    {
        $student = Student::all();
        return view('students')->with(compact('student'));
    }
}