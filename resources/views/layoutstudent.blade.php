<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Elixir - Bootstrap Template</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css">
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.theme.default.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="{{asset('public/FontEnd/assets/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('public/FontEnd/assets/css//hocsinh-ieltsFD.css')}}">

</head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-barba="wrapper">
  <!--Header-->
  <!--Navbar-->
  <nav class="navbar navbar-expand-lg navbar-light bg-light bg-gradient fixed-top">
    <div class="container">
      <a class="navbar-brand fs-4 fw-bolder" href="{{URL :: to('/st_course')}}" style="color: #4e57d4;">ZenLish</a>
      <button class="navbar-toggler shadow-none border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <!--<a class="nav-link fw-semibold mx-3" aria-current="page" href="#">Về chúng tôi</a>-->
          </li>
          <!--<li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Chương trình học
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="ielts.html">Khóa học IELTS</a></li>
                  <li><a class="dropdown-item" href="toeic.html">Khóa học TOEIC</a></li>
                </ul>
              </li>-->
          <li class="nav-item">
            <a class="nav-link fw-semibold mx-3" href="{{URL :: to('/Khoahocdamua')}}">Khóa học đã mua</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fw-semibold mx-3" href="{{URL :: to('/tonghopthithu')}}">Kết quả thi thử</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fw-semibold mx-3" href="{{URL :: to('/viewtest')}}">Thi thử</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fw-semibold mx-3" href="{{URL :: to('/thongtinlichhoc')}}">Lịch học</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fw-semibold mx-3" href="teacher.html">Giáo viên</a>
          </li>
          <li class="nav-item dropdown header-profile">
            <i class="bi bi-person-circle fs-4" style="padding-left: 30px;" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"></i>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">
                <?php
                  $tenhocvien = session("tenhocvien");
                  echo $tenhocvien;
                ?>
              </a></li>
              <li><a class="dropdown-item" href="{{URL :: to('/logout')}}" style="color: red">Đăng xuất</a></li>
            </ul>
          </li>
        </ul>
      </div>
  </nav>
    @yield('student_content')
  <footer class="bg-dark">
    <div class="footer-top">
      <div class="container">
        <div class="row gy-5">
          <div class="col-lg-3 col-sm-6">
            <h4 class="fw-bolder fs-2 text" style="color: #ffffff;"> ZenLish </h4>
            <div class="line"></div>
            <p>Tiếng anh dẫn đầu bởi thế hệ mới và <br> mang lại sự đột phá!</p>
            <div class="social-icons">
              <a href="#"><i class="ri-twitter-fill"></i></a>
              <a href="#"><i class="ri-instagram-fill"></i></a>
              <a href="#"><i class="ri-github-fill"></i></a>
              <a href="#"><i class="ri-dribbble-fill"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <h5 class="mb-0 text-white text-uppercase">Về chúng tôi</h5>
            <div class="line"></div>
            <ul>
              <li><a href="#">
                  Đội ngũ giảng viên</a></li>
              <li><a href="#">
                  Chương trình học</a></li>
              <li><a href="#">Phương pháp giảng dạy</a></li>
            </ul>
          </div>
          <div class="col-lg-3 col-sm-6">
            <h5 class="mb-0 text-white text-uppercase">Phương pháp</h5>
            <div class="line"></div>
            <ul>
              <li><a href="#">Lớp học nhỏ</a></li>
              <li><a href="#">Chương trình học hấp dẫn</a></li>
              <li><a href="#">Linh động thời gian</a></li>
            </ul>
          </div>
          <div class="col-lg-3 col-sm-6">
            <h5 class="mb-0 text-white text-uppercase">Liên hệ</h5>
            <div class="line"></div>
            <ul>
              <li>TP Ho Chi Minh, HCM 3300</li>
              <li>(414) 586 - 3017</li>
              <li>www.example.com</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <div class="container">
        <div class="row g-4 justify-content-between">
          <div class="col-auto">
            <p class="mb-0">© Copyright ZenLish. All Rights Reserved</p>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <script src="https://unpkg.com/@barba/core"></script>
  <!-- jsdelivr -->
  <script src="https://cdn.jsdelivr.net/npm/@barba/core"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js"></script>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script src="{{('public/FontEnd/assets/js/main.js')}}"></script>
 
  <script>
    $('.blog_slider_area').owlCarousel({
      autoplay: true,
      slideSpeed: 1000,
      items: 3,
      loop: true,
      nav: false,
      margin: 30,
      dots: false,
      responsive: {
        320: {
          items: 1
        },
        767: {
          items: 2
        },
        600: {
          items: 2
        },
        1000: {
          items: 3
        }
      }
    });
  </script>
   <script src="https://www.gstatic.com/dialogflow-console/fast/messenger/bootstrap.js?v=1"></script>
    <df-messenger
    intent="WELCOME"
    chat-title="Chat-box"
    agent-id="00db3542-6271-4ff6-ad0a-57921e4b29e1"
    language-code="en"
    ></df-messenger>
</body>

</html>