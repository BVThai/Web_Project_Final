@extends('layoutteacher')
@section ('content_teacher')
<div class="container py-3">
    <div class="row">
        <div class="col-12 py-3">
            <div class="section-title">
                <h1 class="display-4 fw-semibold text-center" style="color:white; padding-top: 30px;">
                    Khóa học đã dạy
                </h1>
            </div>
        </div>
        <div class="col-12">
            <div class="bg-light rounded p-2">
                <ul class="nav nav-tabs">
                    <li class="nav-item ">
                        <a class="nav-link active" data-bs-toggle="tab" href="#all">Đã dạy</a>
                    </li>
                </ul>
                <div class="row">
                    <div class="col-12">
                        <div class="row">
                            @foreach ($lophocdangday as $key=>$value)
                                <div class="col-lg-3 col-md-6 col-sm-10 my-4">
                                    <div style="height: 500px;" class="card">
                                        <img style="height: 200px;" src="public/Uploads/Course/{{$value->ANHKHOAHOC}}" alt="">
                                        <div class="card-body">
                                            <h3 class="card-title">{{$value->TENKHOAHOC}}</h3>
                                            <h5 class="card-title">{{$value->TENLOPHOC}}</h5>
                                            <p class="card-text">
                                                Cải thiện toàn bộ các kĩ năng, củng cố nền tảng ngữ pháp và trau dồi từ vựng, bước đầu làm quen với phát âm.
                                            </p>
                                            <a href="{{URL :: to('/Thongtinchitietlop/'.$value->MALOPHOC)}}" class="btn btn-outline-primary">Thông tin chi tiết</a>


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
@endsection


