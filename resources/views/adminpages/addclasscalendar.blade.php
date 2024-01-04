@extends('layoutadmin')
@section ('admin_content')
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Quản lý lịch học</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Thêm lịch học</a></li>
                    </ol>
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Thêm lịch học</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-validation">
                                    <form class="needs-validation" action="{{ route('ad_add_classcal') }}" method="post" novalidate="">
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
                                                        <form>
                                                            @csrf
                                                            <select class="default-select wide form-control khoahoc1" id="validationCustom06" name='khoahoc'>
                                                                <option data-display="Chọn khóa học">Chọn khóa học</option>
                                                                @foreach($all_course as $key => $couall)
                                                                <option value="{{$couall->MAKHOAHOC}}">{{ $couall->TENKHOAHOC}}</option>
                                                                @endforeach
                                                            </select>
                                                        </form>                                                    
                                                    </div>
                                                    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
                                                    <script>
                                                        $(document).ready(function() {
                                                            $('#validationCustom06').on('change', function() {
                                                                var makhoahoc = $(this).val();
                                                                var _token = $('input[name="_token"]').val();
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
                                                </div>
                                                <p id="abcd"></p>
                                                <div class="mb-3 row">
                                                    <label class="col-lg-4 col-form-label" for="validationCustom02">Tên lớp học <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <select class="wide form-control getcalss" id="validationCustom07" name='lophoc'>
                                                            <option data-display="Chọn lớp học">Chọn lớp học</option>
                                                            
                                                        </select>
                                                        
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-xl-6">

                                                <div class="mb-3 row">
                                                    <label class="col-lg-4 col-form-label" for="validationCustom03">Thứ
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <select class="default-select wide form-control" id="ddaw" name='thu'>
                                                            <option value="Thứ hai">Thứ hai</option>
                                                            <option value="Thứ ba">Thứ ba</option>
                                                            <option value="Thứ tư">Thứ tư</option>
                                                            <option value="Thứ năm">Thứ năm</option>
                                                            <option value="Thứ sáu">Thứ sáu</option>
                                                            <option value="Thứ bảy">Thứ bảy</option>
                                                            <option value="Chủ nhật">Chủ nhật</option>
                                                        </select>
                                                        <div class="invalid-feedback">
                                                            Please enter a password.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label class="col-lg-4 col-form-label" for="validationCustom05">Thời gian bắt đầu
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input type="time" class="form-control" name="thoigianbatdau" min="09:00" max="18:00" required />
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label class="col-lg-4 col-form-label" for="validationCustom05">Thời gian kết thúc
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input type="time" class="form-control" name="thoigianketthuc" min="09:00" max="18:00" required />
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

      