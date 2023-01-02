@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center align-items-center g-2">
        <div class="col">
<div class="table-responsive">
    <table class="table table-primary my-3">
        <thead>
            <tr>
                <th scope="col" class="text-center">วันที</th>
                <th scope="col" class="text-center">มาโรงเรียน</th>
                <th scope="col" class="text-center">กลับจากโรงเรียน</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($datamycardstime as $timecard)
            <tr >
                <td>{{$timecard->c_date}}</td>
                <td>{{$timecard->c_in}}</td>
                <td>{{$timecard->c_out}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

        </div>
    </div>
</div>
@endsection