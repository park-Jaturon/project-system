<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class GradeController extends Controller
{
    public function r1c1grade()
    {
        $students = Student::all();
        return view('grade.r1c1g',compact('students'));
    }
}
