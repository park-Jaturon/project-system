@extends('layouts.app')
@section('content')
    <div class="container">
        <div class=" row mt-3">
            <a name="" id="" class="btn btn-primary float-end " href="{{ url('/teacher/addpots') }}"
                role="button">เพิ่มประกาศ</a>
        </div>

        <div class="row justify-content-center align-items-center g-2 ">
            <div class="col mt-4 ">
                @foreach ($post as $row)
                    <div class="card mb-3">
                        <div class="card-header">
                            {{ $row->p_name }}
                        </div>
                        <div class="card-body">
                            <div class="mb-3">

                                {!! $row->description !!}
                            </div>

                        </div>
                       @if (auth()->User()->caste == "teacher")

                        <div class="card-footer text-end">
                            <a href="{{url("/teacher/post/{$row->id}/edit")}}" class="btn btn-primary" >แก้ไข</a>
                            <a href="{{url("/teacher/post/{$row->id}/delete")}}" class="btn btn-primary" role="button">ลบ</a>
                        </div>
                       @endif

                    </div>
                    </div>
                @endforeach
            </div>


        </div>
    @endsection
