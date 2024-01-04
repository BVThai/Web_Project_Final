@extends('layoutteacher')
@section ('content_teacher')
<div class="container py-3">
    <div class="row">
        <div class="col-12 py-3">
            <div class="section-title">
                <h1 class="display-4 fw-semibold text-center" style="color:white; padding-top: 30px;">
                   Học viên
                </h1>
            </div>
        </div>
        <div class="col-12">
            <div class="bg-light rounded p-2">
                <ul class="nav nav-tabs">
                    <li class="nav-item ">
                        <a class="nav-link active" data-bs-toggle="tab" href="#all">Danh sách học viên</a>
                    </li>
                </ul>
                <div class="row">
                    <div class="col-12 py-2" style="margin-top: 35px;">
                        <div class="section-title">
                            <h1 class="display-6 fw-semibold text-center"> Thông tin học viên chi tiết </h1>
                        </div>
                    </div>
                    <div class="container ps-5">
                        <div class="row">
                            <div class="row table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr class="table-warning">
                                            <th>Mã học viên</th>
                                            <th>Tên học viên</th>
                                            <th>Email</th>
                                            <th>Số điện thoại</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($danhsachhocvien as $key=>$dshv)
                                        
                                            <tr>
                                                <td>{{$dshv->MAHOCVIEN}}</td>
                                                <td>{{$dshv->TENHOCVIEN}}</td>
                                                <td>{{$dshv->EMAIL}}</td>
                                                <td>{{$dshv->SODIENTHOAI}}</td>


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
</div>
@endsection