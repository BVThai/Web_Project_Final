@extends('layoutadmin')
@section ('admin_content')
        <div class="content-body">
            <div class="container-fluid">

                <div class="row page-titles">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Quản lý khóa học</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Tất cả khóa học</a></li>
                    </ol>
                </div>
                <!-- row -->


                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Khóa học</h4>
                            </div>
                            <div class="">
                                <div class="">
                                    <table id="example3" class="" style="min-width: 845px;  ">
                                    <?php
                                                $thongbaothanhcong = session("thongbaothaydoi");
                                                if ($thongbaothanhcong) {
                                                    echo '<span style = "color: red" class ="fs-5">' . $thongbaothanhcong . '</span>';
                                                    session(["thongbaothaydoi" => null]);
                                                }
                                    ?>
                                        <thead>
                                            <tr>
                                                
                                                <th >Mã khóa học</th>
                                                <th>Tên khóa học</th>
                                                <th>Mô tả</th>
                                                <th>Giá khóa học</th>
                                                <th>Thời lượng</th>
                                                <th>Ảnh khóa học</th> 
                                                <th>Loại khóa học</th>    
                                                <th>Trạng thái</th>   
                                                <th>Hành động</th>                                      
                                            </tr>
                                        </thead>
                                        <tbody style="  border:1px solid black;">
                                            @foreach($all_course as $key => $courseall)
                                            <tr>
                                                <td>{{($courseall->MAKHOAHOC)}}</td>
                                                <td>{{($courseall->TENKHOAHOC)}}</td>
                                                <td>{{($courseall->MOTA)}}</td>
                                                <td>{{($courseall->GIAKHOAHOC)}}</td>
                                                <td>{{($courseall->THOILUONG)}}</td>
                                                <td><img  width="100" src="public/Uploads/Course/{{$courseall->ANHKHOAHOC}}" alt=""></td>
                                                <td>{{($courseall->LOAIKHOAHOC)}}</td>
                                                <td>{{($courseall->TRANGTHAI)}}</td>
                                                
                                                <td>
                                                    <div class="d-flex">
                                                        <a href="{{URL :: to('/updatecourse/'.$courseall->MAKHOAHOC)}}" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                                        <a href="{{URL :: to('/deletecourse/'.$courseall->MAKHOAHOC)}}" class="btn btn-danger shadow btn-xs sharp me-1"><i class="fa fa-trash"></i></a>
                                                        <a href="{{URL :: to('/deletecustomer/'.$courseall->MAKHOAHOC)}}" class=" btn btn-primary shadow btn-xs sharp"><i class="bi bi-shop"></i></a>
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