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
                                <li><a class="dropdown-item" href="{{ route('g1') }}">อบ 1/2</a></li>
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

    <div class="container text-center">
        <div class="row justify-content-center">
            <div class="col-8">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Firstname</th>
                            <th>Lastname</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>John</td>
                            <td>Doe</td>
                            <td > <i class="bi bi-0-circle"></i></td>
                        </tr>
                        <tr>
                            <td>Mary</td>
                            <td>Moe</td>
                            <td>mary@example.com</td>
                        </tr>
                        <tr>
                            <td>July</td>
                            <td>Dooley</td>
                            <td>july@example.com</td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
        <div class="row">
<div class="col">
    <div class="stars">
        <div class="stars-ghost">
           <div class="star"><i class="fa fa-star"></i></div>
           <div class="star"><i class="fa fa-star"></i></div>
           <div class="star"><i class="fa fa-star"></i></div>
           <div class="star"><i class="fa fa-star"></i></div>
           <div class="star"><i class="fa fa-star"></i></div>
        </div>
        <div class="star"><i class="fa fa-star-o"></i></div>
        <div class="star"><i class="fa fa-star-o"></i></div>
        <div class="star"><i class="fa fa-star-o"></i></div>
        <div class="star"><i class="fa fa-star-o"></i></div>
        <div class="star"><i class="fa fa-star-o"></i></div>
        <div class="info">Hover Stars</div>
     </div>
</div>
        </div>
    </div>
@endsection
