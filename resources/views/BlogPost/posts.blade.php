@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center align-items-center g-2">
        <div class="col">Column</div>
        <div class="col">Column</div>
        <div class="col">Column</div>
    </div>
    <div class="row">
      <div class="col-4">
        <div class="card">
          <div class="card-body">
            <h3 class="card-title">Title</h3>
            <p class="card-text">Text</p>
          </div>
        </div>
      </div>
      <div class="col-4">
        <div class="card">
          <div class="card-body">
            <h3 class="card-title">Title</h3>
            <p class="card-text">Text</p>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection