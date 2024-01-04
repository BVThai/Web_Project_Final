@extends('layoutadmin')
@section ('admin_content')
        <div class="content-body">
            <div class="container-fluid">

                <div class="row page-titles">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Quản lý thanh toán</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Tất cả thanh toán</a></li>
                    </ol>
                </div>
                <!-- row -->


                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Thanh toán</h4>
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
                                                
                                                <th>Mã thanh toán</th>
                                                <th>Khách hàng</th>
                                                <th>Khóa học</th>
                                                <th>Lớp học</th>
                                                <th>Ngày mua</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($allpayment as $key => $userall)
                                            <tr>
                                                <td>{{($userall->MATHANHTOAN)}}</td>
                                                <td>{{($userall->TENHOCVIEN)}}</td>
                                                <td>{{($userall->TENKHOAHOC)}}</td>
                                                <td>{{($userall->TENLOPHOC)}}</td>
                                                <td>{{($userall->NGAYTHANHTOAN)}}</td>                                                             
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