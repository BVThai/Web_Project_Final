@extends('layoutadmin')
@section ('admin_content')
        <div class="content-body">
            <div class="container-fluid">

                <div class="row page-titles">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Quản lý học viên</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Tất cả học viên</a></li>
                    </ol>
                </div>
                <!-- row -->


                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Học viên</h4>
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
                                                
                                                <th>Mã người dùng</th>
                                                <th>Họ và tên</th>
                                                <th>Ngày sinh</th>
                                                <th>Email</th>
                                                <th>Số điện thoại</th>
                                                <th>Vai trò</th>
                                                <th>Hành động</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($all_user as $key => $userall)
                                            <tr>
                                                <td>{{($userall->MAHOCVIEN)}}</td>
                                                <td>{{($userall->TENHOCVIEN)}}</td>
                                                <td>{{($userall->NGAYSINH)}}</td>
                                                <td>{{($userall->EMAIL)}}</td>
                                                <td>{{($userall->SODIENTHOAI)}}</td>
                                                <td>{{($userall->TINHTRANG)}}</td>
                                                <td>
                                                    <div class="d-flex">
                                                        <a href="{{URL :: to('/updatecustomer/'.$userall->MAHOCVIEN)}}" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                                        <a href="{{URL :: to('/deletecustomer/'.$userall->MAHOCVIEN)}}" class="btn btn-danger shadow btn-xs sharp me-1"><i class="fa fa-trash"></i></a>
                                                        <a href="{{URL :: to('/deletecustomer/'.$userall->MAHOCVIEN)}}" class=" btn btn-primary shadow btn-xs sharp"><i class="bi bi-shop"></i></a>
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
      @endsection