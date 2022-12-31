@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-primary"> แผนการเรียน</h2>
                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <ul>
                            <li class="fs-4 text-warning"><a href="{{ route('u1') }}">โลกสวยด้วยสีสัน</a></li>
                            <li class="fs-4 text-warning"><a href="#">โลกและดวงดาว</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
