@extends('layoutteacher')
@section ('content_teacher')
<div class="container py-3">
    <div class="row">
        <div class="col-12 py-3">
            <div class="section-title">
                <h1 class="display-4 fw-semibold text-center" style="color:white; padding-top: 30px;">
                    Khóa học đang dạy
                </h1>
            </div>
        </div>
        <div class="col-12">
            <div class="bg-light rounded p-2">
                <ul class="nav nav-tabs">
                    <li class="nav-item ">
                        <a class="nav-link active" data-bs-toggle="tab" href="#all">Đang dạy</a>
                    </li>
                </ul>
                <div class="row">
                    <div class="col-12 py-2" style="margin-top: 35px;">
                        <div class="section-title">
                            <h1 class="display-6 fw-semibold text-center"> Thông tin chi tiết </h1>
                        </div>
                    </div>
                    <div class="container ps-5">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="row rounded text-center"
                                     style="background-color: #4e57d4; height:50px; padding-top: 10px; margin-bottom: 20px;">
                                    <a class="fs-5 fw-bolder" style="color: white;">Tên lớp học</a>
                                </div>
                                <div class="row rounded text-center"
                                     style="background-color: #4e57d4; height:90px; padding-top: 30px; margin-bottom: 20px;">
                                    <a class="fs-5 fw-bolder" style="color: white;"> Lịch học khóa học </a>
                                </div>

                                <div class="row rounded text-center"
                                     style="background-color: #4e57d4; height:50px; padding-top: 10px; margin-bottom: 20px;">
                                    <a class="fs-5 fw-bolder" style="color: white;"> Ngày lớp học bắt đầu </a>
                                </div> 
                                <div class="row rounded text-center"
                                            style="background-color: #4e57d4; height:50px; padding-top: 10px; margin-bottom: 20px;">
                                    <a class="fs-5 fw-bolder" style="color: white;"> Ngày lớp học kết thúc </a>
                                </div>
                                <div class="row rounded text-center"
                                     style="background-color: #4e57d4; height:50px; padding-top: 10px; margin-bottom: 20px;">
                                    <a class="fs-5 fw-bolder" style="color: white;"> Danh sách học viên </a>
                                </div>
                                <div class="row rounded text-center"
                                     style="background-color: #4e57d4; height:50px; padding-top: 10px; margin-bottom: 20px;">
                                    <a class="fs-5 fw-bolder" style="color: white;"> Thông báo lớp học </a>
                                </div>
                                <div class="row rounded text-center"
                                     style="background-color: #4e57d4; height:50px; padding-top: 10px; margin-bottom: 20px;">
                                    <a class="fs-5 fw-bolder" style="color: white;"> Bắt đầu dạy! </a>
                                </div>
                            </div>
                            <div class="col-auto"> </div>
                            @foreach($chitietlop as $key=>$chitietlop)
                                <div class="col-lg-8">
                                    <div class="row rounded"
                                        style="background-color: rgba(109, 195, 161, 0.28); height:50px; padding-top: 10px; margin-bottom: 20px; padding-left: 10px;">
                                        <a class="fs-5" style="color:#000000">{{$chitietlop->TENLOPHOC}}</a>
                                    </div>
                                    <div class="row rounded"
                                        style="background-color: rgba(109, 195, 161, 0.28); height:90px; padding-top: 10px; margin-bottom: 20px; padding-left: 10px;">
                                        <a class="fs-5" style="color:#000000">
                                            @foreach($lichhoc as $key=>$value)
                                                <span>{{$value->THU}} -Từ {{$value->GIOBATDAU}} - đến{{$value->GIOKETTHUC}}</span><br>
                                            @endforeach
                                            
                                        </a>
                                    </div>
                                    <div class="row rounded"
                                        style="background-color: rgba(109, 195, 161, 0.28); height:50px; padding-top: 10px; margin-bottom: 20px; padding-left: 10px;">
                                        <a class="fs-5" style="color:#000000">{{\Carbon\Carbon::parse($chitietlop->THOIGIANBATDAU)->format('d/m/Y')}}</a>

                                    </div>
                                    <div class="row rounded"
                                        style="background-color: rgba(109, 195, 161, 0.28); height:50px; padding-top: 10px; margin-bottom: 20px; padding-left: 10px;">
                                        <a class="fs-5" style="color:#000000">{{\Carbon\Carbon::parse($chitietlop->THOIGIANKETTHUC)->format('d/m/Y')}}</a>

                                    </div>
                                    <div class="row rounded"
                                        style="background-color: rgba(109, 195, 161, 0.28); height:50px; padding-top: 10px; margin-bottom: 20px; padding-left: 10px;">
                                        <a href="{{URL :: to('/Xemhocvienthuoclop/'.$value->MALOPHOC)}}" class="fs-5" style="color:#000000"> Xem chi tiết >>></a>
                                    </div>
                                    <div class="row rounded"
                                        style="background-color: rgba(109, 195, 161, 0.28); height:50px; padding-top: 10px; margin-bottom: 20px; padding-left: 10px;">
                                        <a href="{{URL::to('/Danhsachthongbao')}}" class="fs-5" style="color:#000000"> Xem chi tiết >>></a>
                                    </div>
                                    <div class="row rounded"
                                        style="background-color: rgba(109, 195, 161, 0.28); height:50px; padding-top: 10px; margin-bottom: 20px; padding-left: 10px;">
                                        <a href="{{URL::to('/Hoconline')}}"  class="fs-5" style="color:#000000"> Mớ lớp >>></a>
                                    </div>
                                    
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>   
    </div>
</div>
@endsection

   
