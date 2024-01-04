@extends('layoutadmin')
@section ('admin_content')

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Quản lý học viên</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Thêm học viên</a></li>
                    </ol>
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Thêm học viên</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-validation">
                                    <form class="needs-validation" action="{{ route('ad_add_customer') }}" method="post" novalidate="">
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
                                                    <label class="col-lg-4 col-form-label" for="validationCustom01">Họ và tên:
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" name='hovaten' id="validationCustom01" placeholder="" required="">
                                                        <div class="invalid-feedback">
                                                            Vui lòng nhập tên.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label class="col-lg-4 col-form-label" for="validationCustom02">Ngày sinh: <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" id="validationCustom02" name='ngaysinh' placeholder="YYYY-MM-DD" required="">
                                                        <div class="invalid-feedback">
                                                            Vui lòng nhập ngày tháng năm sinh
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label class="col-lg-4 col-form-label" for="validationCustom03">Password
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" name='matkhau' id="validationCustom03" placeholder="Choose a safe one.." required="">
                                                        <div class="invalid-feedback">
                                                            Please enter a password.
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-xl-6">
                                                
                                                <div class="mb-3 row">
                                                    <label class="col-lg-4 col-form-label" for="validationCustom06">Email
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" id="validationCustom06" name='email' placeholder="abcd@gmail.com" required="">
                                                        <div class="invalid-feedback">
                                                            Please enter a Currency.
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="mb-3 row">
                                                    <label class="col-lg-4 col-form-label" for="validationCustom08">Số điện thoại
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" name='sodienthoai' id="validationCustom08" placeholder="09344xxxxx" required="">
                                                        <div class="invalid-feedback">
                                                            Please enter a phone no.
                                                        </div>
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