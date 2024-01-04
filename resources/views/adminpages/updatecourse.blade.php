@extends('layoutadmin')
@section ('admin_content')
        <div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Quản lý khóa học</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Tất cả khóa học</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Chỉnh sửa khóa học</a></li>
                    </ol>
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Chỉnh sửa khóa học</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-validation">
                                    @foreach($updatecourse as $key => $editcourse)
                                    <form class="needs-validation" action="{{URL :: to('/processupdatecourse/'.$editcourse->MAKHOAHOC)}}" method="post" novalidate="">
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
                                                        <input type="text" class="form-control" name='tenkhoahoc' id="validationCustom01" value="{{($editcourse->TENKHOAHOC)}}" required="">
                                                        <div class="invalid-feedback">
                                                            Vui lòng nhập tên.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label class="col-lg-4 col-form-label" for="validationCustom02">Mô tả <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" id="validationCustom02" name='mota' value="{{($editcourse->MOTA)}}" required="">
                                                        <div class="invalid-feedback">
                                                            Vui lòng nhập ngày tháng năm sinh
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label class="col-lg-4 col-form-label" for="validationCustom03">Giá
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" name='gia' id="validationCustom03" value="{{($editcourse->GIAKHOAHOC)}}" required="">
                                                        <div class="invalid-feedback">
                                                            Please enter a password.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label class="col-lg-4 col-form-label" for="validationCustom011">Loại khóa học
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <select class="default-select wide form-control" id="validationCustom05" name='loaikhoahoc'>
                                                            <option data-display="Ielts/Toiec">--Chọn--</option>
                                                            <option selected value="{{($editcourse->LOAIKHOAHOC)}}">{{($editcourse->LOAIKHOAHOC)}}</option>
                                                            <option value="Toiec">Toiec</option>
                                                            <option value="Ielts">Ielts</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="mb-3 row">
                                                    <label class="col-lg-4 col-form-label" for="validationCustom06">Ảnh khóa học
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input type="file" class="form-control" id="validationCustom06" name='anhkhoahoc' required="">
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label class="col-lg-4 col-form-label" for="validationCustom06">
                                                        <span class="text-danger"></span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <img src="{{URL :: to('public/Uploads/Course/'.$editcourse->ANHKHOAHOC)}}" height="100" width="100" alt="">
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label class="col-lg-4 col-form-label" for="validationCustom06">Thời lượng
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" id="validationCustom06" name='thoiluong' value="{{($editcourse->THOILUONG)}}" required="">
                                                        <div class="invalid-feedback">
                                                            Please enter a Currency.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label class="col-lg-4 col-form-label" for="validationCustom05">Trạng thái
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <select class="default-select wide form-control" id="validationCustom05" name='trangthai'>
                                                            <option data-display="Ẩn/Hiện">--Chọn--</option>
                                                            <option selected value="{{($editcourse->TRANGTHAI)}}">{{($editcourse->TRANGTHAI)}}</option>;
                                                            <option value="Ẩn">Ẩn</option>
                                                            <option value="Hiện">Hiện</option>
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