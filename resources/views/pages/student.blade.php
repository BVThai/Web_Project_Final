@extends('layoutstudent')
@section ('student_content')
  <section id="blog_area" class="section-padding">
    <div class="container">
      <div class="section_heading text-center" style="margin-bottom: 80px;">
        <h1> Các khóa học <span style="color:#4e57d4"> IELTS </span> </h1>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="blog_slider_area owl-carousel">
            @foreach($ielts as $key => $ieltsall)
            <div class="box-area">
              <div class="single-blog">
                <div class="post-img">
                  <img style="height: 300px !important;" src="public/Uploads/Course/{{$ieltsall->ANHKHOAHOC}}" alt="">
                </div>
                <div class="single-blog">
                  <a href="#">
                    <h3 class="post-title" style="padding-top: 20px;"> {{$ieltsall->TENKHOAHOC}} </h3>
                  </a>
                  <p class="blog-text">
                    {{$ieltsall->MOTA}}
                  </p>
                  <p> Giá: <a style="color:chocolate">  {{number_format($ieltsall->GIAKHOAHOC, 0, '.', ',') . ' VND'}}</a> </p>
                  <div class="btn-area">
                    <a href="{{URL :: to('/viewdetailcourse/'.$ieltsall->MAKHOAHOC)}}" class="btn btn-default main_btn" style="background-color: #4e57d4; color: white;"> Đăng ký ngay! </a>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </section>


  <section id="blog_area" class="section-padding border-top">
    <div class="container">
      <div class="section_heading text-center" style="margin-bottom: 80px;">
        <h1> Các khóa học <span style="color:#4e57d4"> TOEIC </span> </h1>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="blog_slider_area owl-carousel">
            @foreach($toeic as $key => $toeicall)
            <div class="box-area">
              <div class="single-blog">
                <div class="post-img">
                  <img style="height: 300px !important;" src="public/Uploads/Course/{{$toeicall->ANHKHOAHOC}}" alt="">
                </div>
                <div class="single-blog">
                  <a href="#">
                    <h3 class="post-title" style="padding-top: 20px;"> {{$toeicall->TENKHOAHOC}} </h3>
                  </a>
                  <p class="blog-text">
                    {{$ieltsall->MOTA}}
                  </p>
                  <p> Giá: <a style="color:chocolate"> {{number_format($toeicall->GIAKHOAHOC, 0, '.', ',') . ' VND'}}</a> </p>
                  <div class="btn-area">
                    <a href="{{URL :: to('/viewdetailcourse/'.$toeicall->MAKHOAHOC)}}" class="btn btn-default main_btn" style="background-color: #4e57d4; color: white;"> Đăng ký ngay! </a>
                  </div>
                </div>
              </div>
            </div>
            @endforeach


          </div>
        </div>
      </div>
    </div>
  </section>
 @endsection