<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Timecards;
use Illuminate\Support\Facades\DB;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;


class TeacherController extends Controller
{
    public function teacherindex()
    {
        $students = Student::all();
        return view('teacher.studentmanage',['student'=>$students]);
    }

    public function information()
    {
        $data = new  Student();
        return view('teacher.information',compact('data'));
    }

    public function store(Request $request)
    {
         //dd($request->all());

        $student = new Student();
        $student->prefix_name = $request->prefix;
        $student->first_name = $request->firstname;
        $student->last_name = $request->lastname;
        $student->birthdays = $request->birthdays;
        $student->symbol = $request->symbol;
        $student->id_tags = $request->idtags;
        $student->parents1 = $request->parents1;
        $student->parents2 = $request->parents2;
        $student->telephone_number_parents1 = $request->telephonenumberparents1;
        $student->telephone_number_parents2 = $request->telephonenumberparents2;
        $student->telephone_number_bus = $request->telephonenumberbus;
        $student->habitations = $request->habitations;
        $student->save();
        return redirect()->back()->with('success','บันทึกข้อมูลเสร็จสิ้น');
        
    }

    public function edit($id)
    {
        
        $data = Student::findOrFail($id);
        
        return view('teacher.information',compact('data'));
    }

    public function check(){
        $students = Student::all();
        return view('teacher.studentcheck',compact('students'));
    }

    public function checkin($id){
        //dd(date('d-m-Y'));
        $check = new Timecards();
        $check ->students_id = $id;
        $check -> c_date = date('Y-m-d');
        $check ->c_in = date('H:i:s');
        $check ->c_out = date('H:i:s');
        $check->save();
        return redirect()->back();
    }
    public function checkout($id){
        //dd($id);
        $check = DB::table('timecards')
        ->where('c_date','=','MAX(c_date)')
        ->update(['c_out' => date('H:i:s')]);
        return redirect()->back();
    }
}
