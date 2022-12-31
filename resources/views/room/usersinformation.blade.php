@extends('layouts.app')
@section('content')
    <div class=" container  ">
        <div class="row justify-content-center align-items-center g-2 my-3">
            <div class="col-md-6">
                @if ($message = Session::get('success'))
                    <div class="alert alert-success" id="alert">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>   
                    </div>
                @endif
                <div class="card">
                    <div class="card-header">
                        <h3>ปวะวัตินักเรียน</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('add-information') }}" method="post">
                            @csrf
                            {{-- form-ชื่อ-นามสกุล  --}}
                            <div class="row justify-content-center align-items-center g-3 mb-3">
                                <div class="col">
                                    <label for="prefix" class="form-label">คำนำหน้าชื่อ</label>
                                    <select class="form-select" name="prefix"  aria-label="Default select example">
                                        <option selected  >{{$datamyinformation->prefix_name}}</option>
                                        <option value="เด็กชาย">เด็กชาย</option>
                                        <option value="เด็กหญิง">เด็กหญิง</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <label for="firstname" class="form-label">ชื่อ</label>
                                    <input type="text" name="firstname" id="firstname"  class="form-control">
                                </div>
                                <div class="col">
                                    <label for="lastname" class="form-label">นามสกุล</label>
                                    <input type="text" name="lastname" id="lastname" class="form-control" >
                                </div>
                            </div>
                            {{-- form-สัญลักษณ์-วันเกิด-รหัสประจำตัว--}}
                            <div class="row justify-content-center align-items-center g-2 mb-3">
                                <div class="col">
                                    <label for="birthdays" class="form-label">วันเกิด</label>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="bi bi-calendar3"></i>
                                        </span>
                                        <input type="text" id="datepicker" name="birthdays" class="form-control " >
                                    </div>
                                </div>
                                <div class="col">
                                    <label for="symbol" class="form-label">สัญลักษณ์</label>
                                    <select class="form-select" name="symbol">
                                        <option selected ></option>
                                        <option value="ร่ม">ร่ม</option>
                                        <option value="บ้าน">บ้าน</option>
                                        <option value="ลูกบอล">ลูกบอล</option>
                                        <option value="โทรศัพท์">โทรศัพท์</option>
                                        <option value="ทับทิม">ทับทิม</option>
                                        <option value="ส้ม">ส้ม</option>
                                        <option value="ทุเรียน">ทุเรียน</option>
                                        <option value="กระต่าย">กระต่าย</option>
                                        <option value="รองเท้า">รองเท้า</option>
                                        <option value="หมู">หมู</option>
                                        <option value="เป็ด">เป็ด</option>
                                        <option value="แมลงปอ">แมลงปอ</option>
                                        <option value="ปลา">ปลา</option>
                                        <option value="ไอศครีม">ไอศครีม</option>
                                        <option value="ปู">ปู</option>
                                        <option value="แตงโม">แตงโม</option>
                                        <option value="พัด">พัด</option>
                                        <option value="ปลาหมึก">ปลาหมึก</option>
                                        <option value="กุหลาบ">กุหลาบ</option>
                                        <option value="มังคุด">มังคุด</option>
                                        <option value="พระอาทิตย์">พระอาทิตย์</option>
                                        <option value="ผีเสื้อ">ผีเสื้อ</option>
                                    </select>

                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="idtags" class="form-label">รหัสประจำตัว</label>
                                        <input type="text" name="idtags" id="idtags" class="form-control"
                                        >
                                    </div>
                                </div>
                            </div>
                            {{-- form-ชื่อ-บิดา-มารดา --}}
                            <div class="row justify-content-center align-items-center g-2 mb-3">
                                <div class="col">
                                    <label for="parents1" class="form-label">ชื่อ – นามสกุล (บิดา)</label>
                                    <input type="text" name="parents1" id="parents1" class="form-control" >
                                </div>
                                <div class="col">
                                    <label for="parents2" class="form-label">ชื่อ – นามสกุล (มารดา)</label>
                                    <input type="text" name="parents2" id="parents2" class="form-control"
                                    >
                                </div>
                            </div>
                            {{-- form-เบอร์ติดต่อ --}}
                            <div class="row justify-content-center align-items-center g-3 mb-3">
                                <div class="col">
                                    <label for="telephonenumberparents1" class="form-label">เบอร์โทรมารดา</label>
                                    <input type="text" name="telephonenumberparents1" id="telephonenumberparents1"
                                        class="form-control" >

                                </div>
                                <div class="col">
                                    <label for="telephonenumberparents2" class="form-label">เบอร์โทรบิดา</label>
                                    <input type="text" name="telephonenumberparents2" id="telephonenumberparents2"
                                        class="form-control" >

                                </div>
                                <div class="col">
                                    <label for="telephonenumberbus" class="form-label">เบอร์โทรถรับส่ง</label>
                                    <input type="text" name="telephonenumberbus" id="telephonenumberbus"
                                        class="form-control" >

                                </div>
                            </div>
                            {{-- form-ที่อยู่ --}}
                            <div class="row justify-content-center align-items-center g-2 mb-3">
                                <div class="col">
                                    <label for="exampleFormControlTextarea1" class="form-label">ที่อยู่</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" name="habitations" rows="3" ></textarea>
                                </div>

                            </div>
                            <button type="submit" class="btn btn-primary float-end">
                                บันทึก
                            </button>
                        </form>

                    </div>
                    <div class="card-footer text-muted">
                        Footer
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
