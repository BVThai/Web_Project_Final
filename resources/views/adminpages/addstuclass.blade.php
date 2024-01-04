@extends('layoutadmin')
@section ('admin_content')

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Học viên thuôc lớp</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Thêm</a></li>
                    </ol>
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Thêm</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-validation">
                                    <form class="needs-validation" action="{{ route('ad_add_stcalss') }}" method="post" novalidate="">
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
                                                    <label class="col-lg-4 col-form-label" for="validationCustom02">Tên học viên <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <select class="default-select wide form-control"  name='hocvien'>
                                                            <option data-display="Chọn học viên">Chọn học viên</option>
                                                            @foreach($all_stu as $key => $stusall)
                                                            <option value="{{$stusall->MAHOCVIEN }}">{{ $stusall->TENHOCVIEN}}</option>
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
                                                    <label class="col-lg-4 col-form-label" for="validationCustom06">Tên khóa học
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <div class="col-lg-12">
                                                            <form>
                                                                @csrf
                                                                <select class="default-select wide form-control" id="validationCustom06" name='khoahoc'>
                                                                    <option data-display="Chọn khóa học">Chọn khóa học</option>
                                                                    @foreach($all_course as $key => $cousall)
                                                                    <option value="{{$cousall->MAKHOAHOC}}">{{ $cousall->TENKHOAHOC}}</option>
                                                                    @endforeach
                                                                </select>
                                                            </form>
                                                            <div class="invalid-feedback">
                                                                Vui lòng nhập ngày tháng năm sinh
                                                            </div>
                                                        </div>
                                                        <div class="invalid-feedback">
                                                            Please enter a Currency.
                                                        </div>
                                                    </div>
                                                </div>
                                                <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
                                                <script>
                                                    $(document).ready(function() {
                                                        $('#validationCustom06').on('change', function() {
                                                            var makhoahoc = $(this).val();
                                                            var _token = $('input[name="_token"]').val();
                                                            $("#validationCustom07").html('<option data-display="Chọn lớp học">Chọn lớp học</option>');
                                                            $.ajax({
                                                                url: '{{URL("/getclassname")}}',
                                                                method: 'POST',
                                                                data: {
                                                                    makhoahoc: makhoahoc,
                                                                    _token: _token
                                                                },
                                                                success: function(response) {

                                                                    $("#validationCustom07").append(response);


                                                                }
                                                            });

                                                        });
                                                    });
                                                </script>
                                                <div class="mb-3 row">
                                                    <label class="col-lg-4 col-form-label" for="validationCustom05">Tên lớp học
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <div class="col-lg-12">
                                                            <select class=" wide form-control" id="validationCustom07" name='lophoc'>
                                                                <option data-display="Chọn lớp học">Chọn lớp học</option>

                                                            </select>
                                                            <div class="invalid-feedback">
                                                                Vui lòng nhập ngày tháng năm sinh
                                                            </div>
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