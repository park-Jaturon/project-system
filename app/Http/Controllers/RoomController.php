<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoomController extends Controller
{
  
    public function room1class1()
    {
        return view('room/r1c1');
    }

    public function room1class2()
    {
        return view('r1c2');
    }

    public function unit1()
    {
        return view('room/unit1');
    }
}
