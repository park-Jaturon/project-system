@extends('layouts.app')
@section('content')
    <div class=" container p-5 ">
        <div class=" card bg-secondary">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">ชื่อ</label>
            </div>
            <div class="card-body">
                {{-- form-ชื่อ-นามสกุล  --}}
                <div class="mb-3 row row-cols-3  justify-content-center align-items-center">
                    <div class="col form-floating ">
                        <input type="text" class="form-control" id="inputFirstName" placeholder="First Name">
                        <label class="px-3" for="inputName"> ชื่อ</label>
                    </div>

                    <div class="col form-floating">
                        <input type="text" class="form-control" id="inputLastName" placeholder="Last Name">
                        <label for="inputLastName" class="px-3"> นามสกุล</label>
                    </div>
                </div>
                {{-- form-ชื่อ-บิดา-มารดา --}}
                <div class="mb-3 row row-cols-3 justify-content-center align-items-center">
                    <div class="col form-floating">
                        <input type="text" class="form-control" name="inputParents1" id="inputParents1" placeholder="Parents1">
                        <label for="inputParents1" class="px-3"> บิดา</label>
                    </div>
                    <div class="col form-floating">
                        <input type="text" class="form-control" name="inputParents2" id="inputParents2" placeholder="Parents2">
                        <label for="inputParents2" class="px-3"> มารดา</label>
                    </div>
                   
                </div>
                {{-- form-เบอร์ติดต่อ --}}
                <div class="mb-3 row row-cols-1 row-cols-sm-2 row-cols-md-4 justify-content-center">

                    <div class="col ">
                        <label class="col col-form-label">เบอร์โทรบิดา</label>
                        <input type="text" class="form-control" name="inputName" id="inputName" placeholder="Name">
                    </div>

                    <div class="col">
                        <label class="col col-form-label">เบอร์โทรบิดามารดา</label>
                        <input type="text" class="form-control" name="inputName" id="inputName" placeholder="Name">
                    </div>

                    <div class="col">
                        <label class="col col-form-label">เบอร์โทรถรับส่ง</label>
                        <input type="text" class="form-control" name="inputName" id="inputName" placeholder="Name">
                        <div class="form-text">
                            <p class=" text-danger">*ถ้ามี</p>
                        </div>
                    </div>
                </div>
                {{-- form-ที่อยู่ --}}
                <div class="mb-3 row row-cols-3 justify-content-center align-items-center">

                    <div class="col-8 ">
                        <label class="col col-form-label ">ที่อยู่</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                </div>
                {{-- form-วันเกิด --}}
                <div class="mb-3 row row-cols-3 justify-content-center align-items-center">

                    <div class="col ">
                        <label class="col col-form-label ">วันเกิด</label>
                        <input type="text" class="form-control" name="inputName" id="inputName" placeholder="Name">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
