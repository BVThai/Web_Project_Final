@extends('layoutadmin')
@section ('admin_content')
        <div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Học viên thuộc lớp</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Tất cả</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Chỉnh sửa</a></li>
                    </ol>
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Chỉnh sửa</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-validation">
                                    @foreach($updatecalst as $key => $editstclass)
                                    <form class="needs-validation" action="{{URL :: to('/processupdatestclass/'.$editstclass->MAHOCVIEN.'/'.$editstclass->MAKHOAHOC.'/'.$editstclass->MALOPHOC)}}" method="post" novalidate="">
                                        @csrf
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <?php
                                                $thongbaothanhcong = session("thongbaothanhcong");
                                                if ($thongbaothanhcong) {
                                                    echo '<span style = "color: red" class ="fs-5">' . $thongbaothanhcong . '</span>';
                                                    session(["thongbaothanhcong" => null]);
                                                }
                                                ?>
                                                <div class="mb-3 row">
                                                    <label class="col-lg-4 col-form-label" for="validationCustom01">Tên học viên:
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <select class="default-select wide form-control" id="validationCustom05" name='hocvien'>
                                                            <option data-display="Chọn khóa học">Chọn giáo viên phụ trách</option>
                                                            @foreach($getst as $key => $getstu)
                                                            @if($getstu->MAHOCVIEN == $editstclass->MAHOCVIEN)
                                                            <option selected value="{{$getstu->MAHOCVIEN}}">{{$getstu->TENHOCVIEN}}</option>;
                                                            @else
                                                            <option value="{{$getstu->MAHOCVIEN}}">{{$getstu->TENHOCVIEN}}</option>;
                                                            @endif
                                                            @endforeach
                                                        </select>
                                                        <div class="invalid-feedback">
                                                            Vui lòng nhập tên.
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-xl-6">

                                                <div class="mb-3 row">
                                                    <label class="col-lg-4 col-form-label" for="validationCustom06">Tên khóa học
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <select class="default-select wide form-control" id="validationCustom05" name='khoahoc'>
                                                            <option data-display="Chọn khóa học">Chọn giáo viên phụ trách</option>
                                                            @foreach($getcourse as $key => $classall)
                                                            @if($editstclass->MAKHOAHOC == $classall->MAKHOAHOC)
                                                            <option selected value="{{$classall->MAKHOAHOC}}">{{$classall->TENKHOAHOC}}</option>;
                                                            @else
                                                            <option value="{{$classall->MAKHOAHOC}}">{{$classall->TENKHOAHOC}}</option>;
                                                            @endif
                                                            @endforeach
                                                        </select>
                                                        <div class="invalid-feedback">
                                                            Please enter a Currency.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label class="col-lg-4 col-form-label" for="validationCustom05">Tên lớp học
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <select class="default-select wide form-control" id="validationCustom05" name='lophoc'>
                                                            <option data-display="Chọn khóa học">Chọn giáo viên phụ trách</option>
                                                            @foreach($getclass as $key => $classall1)
                                                            @if($editstclass->MALOPHOC == $classall1->MALOPHOC)
                                                            <option selected value="{{$classall1->MALOPHOC}}">{{$classall1->TENLOPHOC}}</option>;
                                                            @else
                                                            <option value="{{$classall1->MALOPHOC}}">{{$classall1->TENLOPHOC}}</option>;
                                                            @endif
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <div class="col-lg-8 ms-auto">
                                                        <button type="submit" class="btn btn-primary">Chỉnh sửa</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
       @endsection