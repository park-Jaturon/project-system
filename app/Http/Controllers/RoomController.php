<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class RoomController extends Controller
{

    public function room1class1()
    {
        return view('room.r1c1');
    }

    public function room1class2()
    {
        return view('r1c2');
    }

    public function unit1()
    {
        return view('room.unit1');
    }

    public function usersmyinformation()
    {
        $datamyinformation = DB::table('users')
        ->join('students','users.students_id','=','students.id')
        ->where('students.id', '=', auth()->User()->students_id)
        ->get();
        return view('room.usersinformation',compact('datamyinformation'));
    }

    public function recordmycardstime(){
        $datamycardstime = DB::table('timecards')
        ->join('users','timecards.students_id','=','users.students_id')
        ->where('timecards.students_id', '=', auth()->User()->students_id)
        ->get();
        return view('room.cardstimestudents',compact('datamycardstime'));
    }
}
