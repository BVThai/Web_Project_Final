@extends('welcome')
@section ('content')
<link rel="stylesheet" href="{{('public/FontEnd/assets/loginpage/login.css')}}">
<link rel="preload" href="{{('public/FontEnd/teacher/preload.css')}}" as="style">
<link rel="stylesheet" href="{{('public/FontEnd/teacher/preload.css')}}" data-n-g="">
<link rel="stylesheet" href="{{('public/FontEnd/teacher/style.css')}}">
<!--TEACHER BANNER-->
<section id="teacher_banner" style="padding-top: 140px;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-md-6 text-center align-self-center" style="padding-left: 15px; padding-right: 15px;" data-aos="fade-right">
                <h1 style="margin-top: 66px; margin-bottom: 45px; font-size: 40px ;">Giảng viên của <span style="color: #4e57d4;"><b>ZenLish</b></span> </h1>
            </div>
            <div class="col-sm-12 col-md-6">
                <img src="{{('public/FontEnd/assets/images/teachers.webp')}}" loading="lazy" data-aos="fade-left" style="width: 800px;">
            </div>
        </div>
    </div>
    <div style="padding-top: 30px;
      text-align:center;
      padding-right: 0px;
      padding-bottom: 30px;
      padding-left: 0px;
      background-image:url(/assets/images/teacher-line-bg.jpg);">
        <div class="container">
            <h2 style="color: white; font-size: 24px"> Khám phá hơn 500+ giáo viên trình độ cao! </h2>
        </div>
    </div>
</section>

<body>
    <main id="teacher_teacher__tBx6v">
        <div class="">
        </div>
        <section id="teacher_teacher__tBx6v">
            <div class="container teacher_teacherInfo__AzWVl">
                <div class="container d-md-none">
                    <div class="teacher_wrapperSearch__075Kq d-sm-none">
                        <input type="text" class="teacher_inputSearch__fbggN" placeholder="Search" value="">
                        <button class="teacher_btnSearch___pNAe">
                            <img src="{{('public/FontEnd/teacher/assets/images/icon/search.svg')}}" alt="arrow" class="teacher_iconClose__Kmlx_" loading="lazy">
                        </button>
                        <img src="{{('public/FontEnd/teacher/assets/images/icon/icon-filter.svg')}}" alt="" class="teacher_iconFilter__HGdeu" loading="lazy">
                    </div>
                    <div class="teacher_rowFilter__weo9k">
                        <div class="teacher_wrapperTagFilter__yjKjI">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-sm-8">
                        <div class="row list">
                            @foreach($all_teacher as $key => $teacherall)
                            <div class="col-xl-3 col-md-6 col-sm-12 item">
                                <div class="teacher-info_sectionWrapper__mqrv_">
                                    <div class="teacher-info_containerWrapper__zKSsM">
                                        <div class="teacher-info_imgTeacherWrapper__1Ky6O">
                                            <img class="teacher-info_imgTeacher__ymoei" src="public/Uploads/Teacher/{{$teacherall->ANHDAIDIEN}}" alt="">
                                        </div>
                                        <div class="teacher-info_contentWrapper__JjL4I">
                                            <span class="teacher-info_subject___6ZDx" style="background-color: rgb(237, 249, 239); color: rgb(78, 87, 212);">
                                                Tiếng Anh</span>
                                            <p class="teacher-info_name__fxOi_">
                                                {{($teacherall->TENGIAOVIEN)}}
                                            </p>
                                            <p class="teacher-info_itemWrapper__C1_Fx">
                                                <img src="{{('public/FontEnd/teacher/assets/images/icon/country.svg')}}" alt="" class="teacher-info_imgIcon__xR2Xm" loading="lazy">
                                                Philippines
                                            </p>
                                            <p class="teacher-info_itemWrapper__C1_Fx">
                                                <img src="{{('public/FontEnd/teacher/assets/images/icon/country.svg')}}" alt="" class="teacher-info_imgIcon__xR2Xm" loading="lazy">
                                                Academic Scoring: 99/100
                                            </p>
                                            <div class="teacher-info_tagsDesktop__brO_l">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <div class="teacher-info_tagsMobile__WImJ4">
                            </div>
                        </div>

                    </div>
                </div>
                <ul class="pagination_paginate__2_4mt listPage">

                </ul>
            </div>
            </div>
            </div>
        </section>
    </main>
</body>
</div>
</section>
@endsection