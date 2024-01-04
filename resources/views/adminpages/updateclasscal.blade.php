@extends('layoutadmin')
@section ('admin_content')
        <div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Quản lý lịch học</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Tất cả lịch học</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Chỉnh sửa lịch học</a></li>
                    </ol>
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Chỉnh sửa lịch học</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-validation">
                                    @foreach($updatecal as $key => $updateclasscal)
                                    <form class="needs-validation" action="{{URL :: to('/processupdateclasscal/'.$updateclasscal->MALICHHOC)}}" method="post" novalidate="">
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
                                                    <label class="col-lg-4 col-form-label" for="validationCustom01">Tên khóa học:
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <select class="default-select wide form-control" id="validationCustom05" name='khoahoc'>
                                                            <option data-display="Chọn khóa học">Chọn giáo viên phụ trách</option>
                                                            @foreach($getcourse as $key => $couall)
                                                            @if($updateclasscal->MAKHOAHOC == $couall->MAKHOAHOC)
                                                            <option selected value="{{$couall->MAKHOAHOC}}">{{$couall->TENKHOAHOC}}</option>;
                                                            @else
                                                            <option value="{{$couall->MAKHOAHOC}}">{{$couall->TENKHOAHOC}}</option>;
                                                            @endif
                                                            @endforeach
                                                        </select>
                                                        <div class="invalid-feedback">
                                                            Vui lòng nhập tên.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label class="col-lg-4 col-form-label" for="validationCustom02">Tên lớp học <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <select class="default-select wide form-control" id="validationCustom05" name='lophoc'>
                                                            <option data-display="Chọn khóa học">Chọn giáo viên phụ trách</option>
                                                            @foreach($getclass as $key => $classall)
                                                            @if($updateclasscal->MALOPHOC == $classall->MALOPHOC)
                                                            <option selected value="{{$classall->MALOPHOC}}">{{$classall->TENLOPHOC}}</option>;
                                                            @else
                                                            <option value="{{$classall->MALOPHOC}}">{{$classall->TENLOPHOC}}</option>;
                                                            @endif
                                                            @endforeach
                                                        </select>
                                                        <div class="invalid-feedback">
                                                            Vui lòng nhập ngày tháng năm sinh
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-xl-6">

                                                <div class="mb-3 row">
                                                    <label class="col-lg-4 col-form-label" for="validationCustom06">Thứ
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                    <div class="col-lg-6">
                                                        <select class="default-select wide form-control" id="ddaw" name='thu'>
                                                            <option value="{{($updateclasscal->THU)}}">{{$updateclasscal->THU}}</option>
                                                            <option value="Thứ hai">Thứ hai</option>
                                                            <option value="Thứ ba">Thứ ba</option>
                                                            <option value="Thứ tư">Thứ tư</option>
                                                            <option value="Thứ năm">Thứ năm</option>
                                                            <option value="Thứ sáu">Thứ sáu</option>
                                                            <option value="Thứ bảy">Thứ bảy</option>
                                                            <option value="Chủ nhật">Chủ nhật</option>
                                                        </select>
                                                        <div class="invalid-feedback">
                                                            Please enter a Currency.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label class="col-lg-4 col-form-label" for="validationCustom05">Thời gian bắt đầu
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                    <input  type="time"  class ="form-control"  min="09:00" max="18:00" name='thoigianbatdau' value="{{($updateclasscal->GIOBATDAU)}}" required="">
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label class="col-lg-4 col-form-label" for="validationCustom06">Thời gian kết thúc
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input  type="time"  class ="form-control"  min="09:00" max="18:00" name='thoigianketthuc' value="{{($updateclasscal->GIOKETTHUC)}}" required="">
                                                        <div class="invalid-feedback">
                                                            Please enter a Currency.
                                                        </div>
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