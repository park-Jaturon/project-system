@extends('layouts.app')
@section('content')
    <div class="container my-3">
        <div class="card">
            <div class="card-header">
                Featured
            </div>
            <div class="card-body">
                <form action="{{ url('add-post') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="" class="form-label">หัวเรื่อง</label>
                        <input type="text" name="topic" id="" class="form-control" placeholder=""
                            aria-describedby="helpId" value="{{old('topic',$data->p_name)}}">
                        <small id="helpId" class="text-muted">Help text</small>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">เนื้อความ</label>
                        <textarea name="description" id="summernote"  rows="3">{{old('description',$data->description)}}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary float-end">
                        บันทึก
                    </button>
                </form>
            </div>
        </div>
    </div>
    <script>
        $('#summernote').summernote({
            tabsize: 2,
            height: 100
        });
       
    </script>
@endsection
