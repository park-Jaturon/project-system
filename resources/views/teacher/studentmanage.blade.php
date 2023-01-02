@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center align-items-center g-2">
            <div class="col-md-6 mt-3">
                <h4>
                    ประวัตินักเรียน
                    <a href="{{ route('teacher.information') }}" class=" btn btn-primary float-end">เพิ่ม</a>
                </h4>
                <div class="table-responsive-md">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ลำดับ</th>
                                <th>ชื่อ</th>
                                <th>สัญลักษณ์</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($students as $row)
                                <tr>
                                    <td>{{ $row->id }}</td>
                                    <td>{{ $row->prefix_name }}{{ $row->first_name }} {{ $row->last_name }}</td>
                                    <td>{{ $row->symbol }}</td>
                                    <td>
                                        <a href="{{ url("/teacher/information/{$row->id}/edit") }}"class=" btn btn-primary">แก้ไข</a>
                                    </td>
                                    <td><a href=" " class=" btn btn-primary">ลบ</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
@endsection
