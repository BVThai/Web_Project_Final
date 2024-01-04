@extends('layoutstudent')
@section ('student_content')
<div class="container py-5">
    <div class="row">
      <div class="col-12 py-3">
        <div class="section-title">
          <h1 class="display-4 fw-semibold text-center"
            style="color:#4e57d4; padding-top: 100px;"> Khóa học đã mua</h1>
          <div class="line"></div>
        </div>
      </div>
      <div class="col-12 ">
        <div class="bg-white rounded p-2">
          <ul class="nav nav-tabs">
            <li class="nav-item ">
              <a class="nav-link active" data-bs-toggle="tab" href="#all">Đang học</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" href="#latest">Đã hoàn thành</a>
            </li>
          </ul>
          <div class="row">
            <div class="col-12">
              <div class="tab-content p-4 ">
                <div id="all" class="tab-pane fade in active show">
                  <div class="row">
                    @foreach($lophocdanghoc as $key=>$lophocdanghoc)
                    <div class="col-lg-3 col-md-6 col-sm-10 my-4">
                      <div class="card">
                        <img style="height: 216px" src="public/Uploads/Course/{{$lophocdanghoc->ANHKHOAHOC}}" alt="">
                        <div class="card-body">
                            <h3 class="card-title">{{$lophocdanghoc->TENKHOAHOC}}</h3>
                            <h5 class="card-title">{{$lophocdanghoc->TENLOPHOC}}</h5>
                            <p style="text-align: justify;" class="card-text">Cải thiện toàn bộ các kĩ năng, củng cố nền tảng ngữ pháp và trau dồi từ vựng, bước đầu làm quen với phát âm.</p>
                            <a href="{{URL :: to('/Thongbaolophochocvien/'.$lophocdanghoc->MALOPHOC)}}" style="width: 192.2px"   class="btn btn-outline-success card-text">Xem thông báo</a>
                            <a href="{{URL :: to('/Thamgiahoc/'.$lophocdanghoc->MALOPHOC)}}" style="margin-top: 10px"  class="btn btn-outline-success">Tham gia buổi học</a>
                        </div>
                      </div>
                    </div>
                    @endforeach
                  </div>
                </div>
                <div id="latest" class="tab-pane fade ">
                  <div class="row">
                  @foreach($lophocketthuc as $key=>$lophocketthuc)
                    <div class="col-lg-3 col-md-6 col-sm-10 my-4">
                      <div class="card">
                        <img style="height: 216px" src="public/Uploads/Course/{{$lophocketthuc->ANHKHOAHOC}}" alt="">
                        <div class="card-body">
                            <h3 class="card-title">{{$lophocketthuc->TENKHOAHOC}}</h3>
                            <h5 class="card-title">{{$lophocketthuc->TENLOPHOC}}</h5>
                            <p style="text-align: justify;" class="card-text">Cải thiện toàn bộ các kĩ năng, củng cố nền tảng ngữ pháp và trau dồi từ vựng, bước đầu làm quen với phát âm.</p>
                            <a style="width: 192.2px"   class="btn btn-outline-success card-text">Xem thông báo</a>
                            
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