<!--**********************************
            Content body start
        ***********************************-->
@extends('layoutadmin')
@section ('admin_content')
<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Quản lý lớp học</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)">Thêm lớp học</a></li>
            </ol>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Thêm lớp học</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-validation">
                            <form class="needs-validation" action="{{ route('ad_add_class') }}" method="post" novalidate="">
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
                                            <label class="col-lg-4 col-form-label" for="validationCustom01">Tên lớp học:
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" name='tenlophoc' id="validationCustom01" placeholder="" required="">

                                            </div>
                                        </div>
                                        <div class="mb-3 row date">
                                            <label class="col-lg-4 col-form-label" for="validationCustom01">Thời gian bắt đầu:
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <div class="input-group" id="datepicker">
                                                    <input type="text" class="form-control" name='thoigianbatdau' placeholder="" required="">
                                                    <span class="input-group-append">
                                                        <span class="input-group-text bg-white form-control">
                                                            <i class="fa fa-calendar mb-1 py-1"></i>
                                                        </span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>

                                        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
                                        <script src="https://cdn.jsdelivr.net/npm/flatpickr@4.6.3/dist/flatpickr.min.js"></script>
                                        <script>
                                            $(document).ready(function() {
                                                // Khởi tạo Flatpickr cho thời gian bắt đầu
                                                const startDatePicker = flatpickr("#datepicker", {
                                                    dateFormat: "Y-m-d",
                                                    minDate: "today",
                                                    onChange: function(selectedDates, dateStr, instance) {
                                                        $("#datepicker input").val(dateStr);
                                                        // Nếu đã chọn thời gian bắt đầu, cập nhật giá trị tối thiểu cho thời gian kết thúc
                                                        if (selectedDates.length > 0) {
                                                            endDatePicker.set("minDate", selectedDates[0]);
                                                            minEndDate.setDate(minEndDate.getDate() + 1); // Thêm 1 ngày
                                                            endDatePicker.set("minDate", minEndDate);
                                                        }
                                                    }
                                                });

                                                // Khởi tạo Flatpickr cho thời gian kết thúc
                                                const endDatePicker = flatpickr("#datepickerlast", {
                                                    dateFormat: "Y-m-d",
                                                    minDate: "today",
                                                    onChange: function(selectedDates, dateStr, instance) {
                                                        $("#datepickerlast input").val(dateStr);
                                                    }
                                                });
                                            });
                                        </script>

                                        <div class="mb-3 row date">
                                            <label class="col-lg-4 col-form-label" for="validationCustom01">Thời gian kết thúc:
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <div class="input-group" id="datepickerlast">
                                                    <input type="text" class="form-control" name='thoigianketthuc' placeholder="" required="">
                                                    <span class="input-group-append">
                                                        <span class="input-group-text bg-white form-control">
                                                            <i class="fa fa-calendar mb-1 py-1"></i>
                                                        </span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                    <div class="col-xl-6">

                                        <div class="mb-3 row">
                                            <label class="col-lg-4 col-form-label" for="validationCustom03">Giáo viên phụ trách
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <select class="default-select wide form-control" id="validationCustom05" name='giaovienphutrach'>
                                                    <option data-display="Chọn giáo viên">Chọn giáo viên phụ trách</option>
                                                    @foreach($all_teacher as $key => $teaall)
                                                    <option value="{{$teaall->MAGIAOVIEN}}">{{$teaall->TENGIAOVIEN}}</option>;
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-lg-4 col-form-label" for="validationCustom03">Tên khóa học
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <select class="default-select wide form-control" id="validationCustom05" name='tenkhoahoc'>
                                                    <option data-display="Chọn khóa học">Chọn khóa học</option>
                                                    @foreach($all_course as $key => $couall)
                                                    <option value="{{$couall->MAKHOAHOC}}">{{$couall->TENKHOAHOC}}</option>;
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-lg-4 col-form-label" for="validationCustom05">Trạng thái
                                                <span class="text-danger">*</span>
                                            </label>

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


<!--**********************************
            Footer start
        ***********************************-->
@endsection