<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;



class studentController extends Controller
{
    public function get_all_student()
    {
        $students = Student::all(); //fetch all students from DB
        return view('student_manage', ['students' => $students]);
    }
    public function get_student_by_id($id)
    {
        $student = Student::find($id);
        return view('student_edit',["student" =>$student]);
    }
}
