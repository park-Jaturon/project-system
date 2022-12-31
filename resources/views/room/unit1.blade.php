@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-8 m-auto">
            <!-- การสร้าง Carousel -->
            <div class="carousel slide" id="slider1" data-bs-ride="carousel">
                    <ol class="carousel-indicators">
                        <button  data-bs-target="#slider1" data-bs-slide-to="0"></button>
                        <button  data-bs-target="#slider1" data-bs-slide-to="1"></button>
                        <button  class="active" data-bs-target="#slider1" data-bs-slide-to="2"></button>
                        <button  data-bs-target="#slider1" data-bs-slide-to="3"></button>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item">
                            <img src="{{URL('images\u1\LINE_ALBUM_หน่วยใบไม้_๒๒๑๑๒๔_20.jpg')}}" class="d-block w-100">
                            <div class="carousel-caption d-none d-md-block">
                            
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="https://cdn.pixabay.com/photo/2020/06/15/01/06/sunset-5299957__340.jpg" class="d-block w-100">
                            <div class="carousel-caption d-none d-md-block">
                               
                            </div>
                        </div>
                        <div class="carousel-item active">
                            <img src="https://cdn.pixabay.com/photo/2021/01/18/17/46/sunset-5928907__340.jpg" class="d-block w-100">
                            <div class="carousel-caption d-none d-md-block">
                                
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="https://cdn.pixabay.com/photo/2021/01/21/14/10/egret-5937499__340.jpg" class="d-block w-100">
                            <div class="carousel-caption d-none d-md-block">
                                
                            </div>
                        </div>
                    </div>
                    <!-- ควบคุมการ Slide ผ่านปุ่ม -->
                    <button class="carousel-control-prev" data-bs-slide="prev" data-bs-target="#slider1">
                        <span class="carousel-control-prev-icon"></span>
                    </button>
                    <button class="carousel-control-next" data-bs-slide="next" data-bs-target="#slider1">
                        <span class="carousel-control-next-icon"></span>
                    </button>
            </div>
        </div>
    </div>
@endsection
