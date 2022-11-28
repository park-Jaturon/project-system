@extends('layouts.app')

@section('content')
    <nav class="navbar mt-0" style="background-color: #e3f2fd;">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">ระบบอะไรสักอย่าง</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                แผนการเรียน
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('r1c1') }}">อบ 1/1</a></li>
                                <li><a class="dropdown-item" href="#">อบ 1/2 </a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                แบบประเมิน
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">อบ 1/2</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex mt-3" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </div>
    </nav>

 
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
