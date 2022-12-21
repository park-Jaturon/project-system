@extends('layouts.app')

@section('content')
   
    

    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">ยินดีตอนรับ....</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        ครูประจำห้อง
                        <img src="{{ URL('images\135869013_2691228581189754_3282395879552809327_o.jpg') }}"
                            class="rounded float-start" style="width: 200px;">
                        <img src="{{ URL('images\137006833_2691228827856396_2474078375956669754_o.jpg') }}"
                            class="rounded float-end" style="width: 200px;">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
