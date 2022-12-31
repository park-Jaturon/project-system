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

                       
                        <div class="row justify-content-center align-items-center g-2 mb-2">
                            <div class="col"></div>
                            <div class="col"> <h3>ครูประจำห้อง</h3></div>
                            <div class="col"></div>
                        </div>
                        <div class="row justify-content-center align-items-center g-2">
                            <div class="col"> 
                                <img src="{{ URL('images\ครูประจำห้อง.jpg') }}"
                            class="rounded float-start" style="width: 200px;">
                            
                        </div>
                            
                            <div class="col"><img src="{{ URL('images\ผู้ช้วยครู.jpg') }}"
                                class="rounded float-end" style="width: 200px;"></div>
                        </div>
                       
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
