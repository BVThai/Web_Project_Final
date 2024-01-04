@extends('layoutstudent')
@section ('student_content')
<div class="container py-5">
    <div class="row">
        <div class="col-12 py-3">
            <div class="section-title">
                <h1 class="display-4 fw-semibold text-center"
                    style="color:#4e57d4; padding-top: 100px;">
                   Kết quả thi thử
                </h1>
                <div class="line"></div>
            </div>
        </div>
        <div class="col-12 ">
            <div class="bg-white rounded p-2">
                <ul class="nav nav-tabs">
                    <li class="nav-item ">
                        <a class="nav-link active" data-bs-toggle="tab" href="#all">Toiec</a>
                    </li>
                </ul>
                <div class="row">
                    <div class="col-12">
                        <div class="tab-content p-4 ">
                            <div id="all" class="tab-pane fade in active show">
                                <div class="row">
                                    @foreach($tonghoplanthi as $key => $value)
                                        
                                            <div class="col-lg-3 col-md-6 col-sm-10 my-4">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h3 class="card-title">Thông tin kiểm tra</h3>
                                                        <h5 class="card-title">Ngày thi: {{$value->NGAYTHI}}</h5>
                                                        <h5 class="card-title">Điểm số: {{$value->SOCAUDUNG * 10}}</h5>
                                                        <div  style="float: right;">
                                                            <a href="{{URL :: to('/XemChiTietThi/'.$value->MALANTHI)}}">Xem chi tiết >>></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



