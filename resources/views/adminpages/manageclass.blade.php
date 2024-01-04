@extends('layoutadmin')
@section ('admin_content')
        <div class="content-body">
            <div class="container-fluid">

                <div class="row page-titles">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Quản lý lớp học</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Tất cả lớp học</a></li>
                    </ol>
                </div>
                <!-- row -->


                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Lớp học</h4>
                                <?php
                                $date = date("Y-m-d");
                                echo $date;
                                ?>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example3" class="display" style="min-width: 845px">
                                        <?php
                                        $thongbaothanhcong = session("thongbaothaydoi");
                                        if ($thongbaothanhcong) {
                                            echo '<span style = "color: red" class ="fs-5">' . $thongbaothanhcong . '</span>';
                                            session(["thongbaothaydoi" => null]);
                                        }
                                        ?>
                                        <thead>
                                            <tr>

                                                <th>Mã lớp học</th>
                                                <th>Tên lớp học</th>
                                                <th>Thời gian bắt đầu</th>
                                                <th>Thời gian kết thúc</th>
                                                <th>Giáo viên phụ trách</th>
                                                <th>Khóa học</th>
                                                <th>Tình trạng</th>
                                                <th>Hành động</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($all_class as $key => $classall)
                                            @php
                                            // Kiểm tra và cập nhật trạng thái
                                            $now = now();
                                            $start_date = \Carbon\Carbon::parse($classall->THOIGIANBATDAU);
                                            $end_date = \Carbon\Carbon::parse($classall->THOIGIANKETTHUC);

                                            if ($now->greaterThan($start_date) && $now->lessThan($end_date)) {
                                            $status = 'Đang hoạt động';
                                            } elseif ($now->greaterThan($end_date)) {
                                            $status = 'Kết thúc';
                                            } else {
                                            $status = 'Chưa bắt đầu';
                                            }
                                            DB::table('LOPHOC')->where('MALOPHOC', $classall->MALOPHOC)->update(['TINHTRANGLOPHOC' => $status]);
                                            @endphp

                                            <tr>
                                                <td>{{($classall->MALOPHOC)}}</td>
                                                <td>{{($classall->TENLOPHOC)}}</td>
                                                <td>{{($classall->THOIGIANBATDAU)}}</td>
                                                <td>{{($classall->THOIGIANKETTHUC)}}</td>
                                                <td>{{($classall->TENGIAOVIEN)}}</td>
                                                <td>{{($classall->TENKHOAHOC)}}</td>
                                               
                                                <?php
                                                $trangthai = $classall->TINHTRANGLOPHOC;
                                                if ($trangthai == "Chưa bắt đầu") {
                                                    echo '<td>';
                                                    echo '<span class="badge light badge-warning">';
                                                    echo '<i class="fa fa-circle text-warning me-1"></i>';
                                                    echo 'Chưa bắt đầu';
                                                    echo '</span>';
                                                    echo '</td>';
                                                } elseif ($trangthai == "Đang hoạt động") {
                                                    echo '<td>';
                                                    echo '<span class="badge light badge-success">';
                                                    echo '<i class="fa fa-circle text-success me-1"></i>';
                                                    echo 'Đang hoạt động';
                                                    echo '</span>';
                                                    echo '</td>';
                                                }
                                                else {
                                                    echo '<td>';
                                                    echo '<span class="badge light badge-danger">';
                                                    echo '<i class="fa fa-circle text-danger me-1"></i>';
                                                    echo 'Đang hoạt động';
                                                    echo '</span>';
                                                    echo '</td>';
                                                }
                                                ?>
                                                <td>
                                                    <div class="d-flex">
                                                        <a href="{{URL :: to('/updateclass/'.$classall->MALOPHOC)}}" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                                        <a href="{{URL :: to('/deleteclass/'.$classall->MALOPHOC)}}" class="btn btn-danger shadow btn-xs sharp me-1"><i class="fa fa-trash"></i></a>
                                                        <a href="{{URL :: to('/deletecustomer/'.$classall->MALOPHOC)}}" class=" btn btn-primary shadow btn-xs sharp"><i class="bi bi-shop"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
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