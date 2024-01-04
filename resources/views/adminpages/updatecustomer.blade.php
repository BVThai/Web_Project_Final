@extends('layoutadmin')
@section ('admin_content')
        <div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Quản lý học viên</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Tất cả học viên</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Chỉnh sửa học viên</a></li>
                    </ol>
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Chỉnh sửa học viên</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-validation">
                                    @foreach($updatecustomer as $key => $editcus)
                                        <form class="needs-validation" action="{{URL :: to('/processupdatecustomer/'.$editcus->MAHOCVIEN)}}" method="post" novalidate="">
                                            @csrf
                                            <div class="row">
                                                <div class="col-xl-6">
                                                    <div class="mb-3 row">
                                                        <label class="col-lg-4 col-form-label" for="validationCustom01">Họ và tên:
                                                            <span class="text-danger">*</span>
                                                        </label>
                                                        <div class="col-lg-6">
                                                            <input type="text" class="form-control" name='hovaten' id="validationCustom01" value="{{($editcus->TENHOCVIEN)}}" required="">
                                                            <div class="invalid-feedback">
                                                                Vui lòng nhập tên.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3 row">
                                                        <label class="col-lg-4 col-form-label" for="validationCustom02">Ngày sinh: <span class="text-danger">*</span>
                                                        </label>
                                                        <div class="col-lg-6">
                                                            <input type="text" class="form-control" id="validationCustom02" name='ngaysinh' value="{{($editcus->NGAYSINH)}}" required="">
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
                                                            <input type="text" class="form-control" name='matkhau' id="validationCustom03" value="{{($editcus->MATKHAU)}}" required="">
                                                            <div class="invalid-feedback">
                                                                Please enter a password.
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="col-xl-6">
                                                    <div class="mb-3 row">
                                                        <label class="col-lg-4 col-form-label" for="validationCustom05">Tình trạng
                                                            <span class="text-danger">*</span>
                                                        </label>
                                                        <?php
                                                            $role = $editcus->TINHTRANG;
                                                            if($role == 'Đang sử dụng'){
                                                                echo '<div class="col-lg-6">';
                                                                echo '<select class="default-select wide form-control" name="vaitro" id="validationCustom05">';
                                                                echo '<option data-display="Chọn">Tình trạng</option>';
                                                                echo '<option selected value="Đang sử dụng">Đang sử dụng</option>';
                                                                echo '<option value="Bị chặn">Bị chặn</option>';
                                                                echo '</select>';
                                                                echo '<div class="invalid-feedback">';
                                                                echo 'Please select a one.';
                                                                echo '</div>';
                                                                echo '</div> ';
                                                            }
                                                            else if($role == 'Bị chặn'){
                                                                echo '<div class="col-lg-6">';
                                                                echo '<select class="default-select wide form-control" name="vaitro" id="validationCustom05">';
                                                                echo '<option data-display="Chọn">Tình trạng</option>';
                                                                echo '<option value="Đang sử dụng">Đang sử dụng</option>';
                                                                echo '<option selected value="Bị chặn">Bị chặn</option>';
                                                                echo '</select>';
                                                                echo '<div class="invalid-feedback">';
                                                                echo 'Please select a one.';
                                                                echo '</div>';
                                                                echo '</div> ';
                                                            }
                                                                                         
                                                            ?>
                                                        
                                                    </div>
                                                    <div class="mb-3 row">
                                                        <label class="col-lg-4 col-form-label" for="validationCustom06">Email
                                                            <span class="text-danger">*</span>
                                                        </label>
                                                        <div class="col-lg-6">
                                                            <input type="text" class="form-control" id="validationCustom06" name='email' value="{{($editcus->EMAIL)}}" required="">
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
                                                            <input type="text" class="form-control" name='sodienthoai' id="validationCustom08" value="{{($editcus->SODIENTHOAI)}}" required="">
                                                            <div class="invalid-feedback">
                                                                Please enter a phone no.
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