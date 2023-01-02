<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Timecards;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;


class TeacherController extends Controller
{
    public function teacherindex()
    {
        $students = Student::all();
        $datamyinformation = DB::table('users')
        ->join('students','users.students_id','=','students.id')
        //->select('users.name','students.prefix_name','students.first_name','students.last_name')
        ->get();
        return view('teacher.studentmanage',compact('students','datamyinformation'));
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
        $check  = Timecards::all();
        return view('teacher.studentcheck',compact('students','check'));
    }

    public function checkin($id){
        //dd(date('d-m-Y'));
        $check = new Timecards();
        $check ->students_id = $id;
        $check -> c_date = date('Y-m-d');
        $check ->c_in = date('H:i:s');
        $check->save();
        return redirect()->back();
    }
    public function checkout($id){
        //dd($id);
         Timecards::where('students_id',$id)->where('c_date',date('Y-m-d'))
         ->update(['c_out' => date('H:i:s')]);
        return redirect()->back();
    }
}
