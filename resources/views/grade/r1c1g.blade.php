@extends('layouts.app')

@section('content')
    <div class="container text-center">
        <div class="row justify-content-center">
            <div class="col-8">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ลำดับ</th>
                            <th>ชื่อ</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($students as $row)
                        <tr>
                            <td>{{$row['id']}}</td>
                            <td>{{$row['prefix_name']}}{{$row['first_name']}}{{$row['last_name']}}</td>
                            <td>
                                <div class="rating-css">  
                                        <input type="radio" value="1" name="product_rating" checked id="rating1">
                                        <label for="rating1" class="bi bi-star-fill"></label>
                                        <input type="radio" value="2" name="product_rating" id="rating2">
                                        <label for="rating2" class="bi bi-star-fill"></label>
                                        <input type="radio" value="3" name="product_rating" id="rating3">
                                        <label for="rating3" class="bi bi-star-fill"></label>
                                        <input type="radio" value="4" name="product_rating" id="rating4">
                                        <label for="rating4" class="bi bi-star-fill"></label>
                                        <input type="radio" value="5" name="product_rating" id="rating5">
                                        <label for="rating5" class="bi bi-star-fill"></label>
                                </div>
                            </td>
                            
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
@endsection
