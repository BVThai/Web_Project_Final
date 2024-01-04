@extends('layoutadmin')
@section ('admin_content')

<!--**********************************
            Content body start
        ***********************************-->
<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Quản lý khóa học</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)">Thêm khóa học</a></li>
            </ol>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Thêm khóa học</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-validation">
                            <form class="needs-validation" action="{{ route('ad_add_course') }}" method="post" novalidate="" enctype="multipart/form-data">
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
                                                <input type="text" class="form-control" name='tenkhoahoc' id="validationCustom01" placeholder="" required="">
                                                <div class="invalid-feedback">
                                                    Vui lòng nhập tên.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-lg-4 col-form-label" for="validationCustom02">Mô tả <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="validationCustom02" name='mota' placeholder="" required="">
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
                                                <input type="text" class="form-control" name='gia' id="validationCustom03" placeholder="Choose a safe one.." required="">
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
                                                    <option value="Toiec">Toiec</option>
                                                    <option value="Ielts">Ielts</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="mb-3 row">
                                            <label class="col-lg-4 col-form-label" for="validationCustom12">Ảnh khóa học
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="file" class="form-control" id="validationCustom12" name='anhkhoahoc' required="">
                                                <div class="invalid-feedback">
                                                    Please enter a Currency.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-lg-4 col-form-label" for="validationCustom06">Thời lượng
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="validationCustom06" name='thoiluong' placeholder="abcd@gmail.com" required="">
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
                                                    <option value="Ẩn">Ẩn</option>
                                                    <option value="Hiện">Hiện</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <div class="col-lg-8 ms-auto">
                                                <button type="submit" class="btn btn-primary">Thêm</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
           
        </div>
    </div>
</div>
<!--**********************************
            Content body end
        ***********************************-->


@endsection