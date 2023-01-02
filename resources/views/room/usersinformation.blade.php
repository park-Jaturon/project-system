@extends('layouts.app')
@section('content')
    <div class=" container  ">
        <div class="row justify-content-center align-items-center g-2 my-3">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3>ปวะวัตินักเรียน</h3>
                    </div>
                    <div class="card-body">
                       
                            @foreach ($datamyinformation as $record)
                                {{-- form-ชื่อ-นามสกุล  --}}
                                <div class="row justify-content-center align-items-center g-3 mb-3">
                                    <div class="col">

                                        <label for="full name" class="form-label">ชื่อ – นามสกุล (นักเรียน)</label>
                                        <input class="form-control" type="text"
                                            value="{{ $record->prefix_name }}{{ $record->first_name }} {{ $record->last_name }}"
                                            aria-label="Disabled input example" disabled readonly>
                                    </div>
                                </div>
                                {{-- form-สัญลักษณ์-วันเกิด-รหัสประจำตัว --}}
                                <div class="row justify-content-center align-items-center g-2 mb-3">
                                    <div class="col">
                                        <label for="birthdays" class="form-label">วันเกิด</label>
                                        <div class="input-group ">
                                            <span class="input-group-text" id="basic-addon1">
                                                <i class="bi bi-calendar3"></i>
                                            </span>
                                            <input class="form-control" type="text" value="{{ $record->birthdays }}"
                                                aria-label="Disabled input example" disabled readonly>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div>
                                            <label for="symbol" class="form-label">สัญลักษณ์</label>
                                            <input class="form-control" type="text" value="{{ $record->symbol }}"
                                                aria-label="Disabled input example" disabled readonly>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div>
                                            <label for="idtags" class="form-label">รหัสประจำตัว</label>
                                            <input class="form-control" type="text" value="{{ $record->id_tags }}"
                                                aria-label="Disabled input example" disabled readonly>
                                        </div>
                                    </div>
                                </div>
                                {{-- form-ชื่อ-บิดา-มารดา --}}
                                <div class="row justify-content-center align-items-center g-2 mb-3">
                                    <div class="col">
                                        <label for="parents1" class="form-label">ชื่อ – นามสกุล (บิดา)</label>
                                        <input class="form-control" type="text" value="{{$record->parents1}}" aria-label="Disabled input example" disabled readonly>
                                    </div>
                                    <div class="col">
                                        <label for="parents2" class="form-label">ชื่อ – นามสกุล (มารดา)</label>
                                        <input class="form-control" type="text" value="{{$record->parents2}}" aria-label="Disabled input example" disabled readonly>
                                    </div>
                                </div>
                                {{-- form-เบอร์ติดต่อ --}}
                                <div class="row justify-content-center align-items-center g-3 mb-3">
                                    <div class="col">
                                        <label for="telephonenumberparents1" class="form-label">เบอร์โทรมารดา</label>
                                        <input class="form-control" type="text" value="{{old('ไม่ได้ระบุ',$record->telephone_number_parents1)}}" aria-label="Disabled input example" disabled readonly>
                                    </div>
                                    <div class="col">
                                        <label for="telephonenumberparents2" class="form-label">เบอร์โทรบิดา</label>
                                        <input class="form-control" type="text" value="{{old('ไม่ได้ระบุ',$record->telephone_number_parents2)}}" aria-label="Disabled input example" disabled readonly>
                                    </div>
                                    <div class="col">
                                        <label for="telephonenumberbus" class="form-label">เบอร์โทรถรับส่ง</label>
                                        <input class="form-control" type="text" value="{{old('ไม่ได้ระบุ',$record->telephone_number_bus)}}" aria-label="Disabled input example" disabled readonly>
                                    </div>
                                </div>
                                {{-- form-ที่อยู่ --}}
                                <div class="row justify-content-center align-items-center g-2 mb-3">
                                    <div class="col">
                                        <label for="exampleFormControlTextarea1" class="form-label">ที่อยู่</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" name="habitations" rows="3">{{$record->habitations}}</textarea>
                                    </div>
                                </div>
                        @endforeach
                    </div>
                    <div class="card-footer text-muted">
                        Footer
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
