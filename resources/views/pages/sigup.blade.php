<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Elixir - Bootstrap Template</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{('public/FontEnd/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{('public/FontEnd/assets/signup/signup.css')}}">
    <link rel="stylesheet" href="{{('public/FontEnd/assets/signup/poup_noti.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" type="text/css" href="https://npmcdn.com/flatpickr/dist/themes/material_blue.css">
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-barba="wrapper">
    <!--Header-->
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light bg-gradient fixed-top">
        <div class="container">
            <a class="navbar-brand fs-4 fw-bolder" href="{{URL :: to('/welcome')}}" style="color: #4e57d4;">ZenLish</a>
            <button class="navbar-toggler shadow-none border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link fw-semibold mx-3" aria-current="page" href="#">Về chúng tôi</a>
                    </li>
                    <li class="nav-item">
                        <a id="myLink" class="nav-link fw-semibold mx-3" href="#">Chương trình học</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-semibold mx-3" href="#">Giáo viên</a>
                    </li>
                </ul>
                <div class="d-flex justify-content-center align-items-center gap-3">
                    <a href="{{URL :: to('/login')}}" class="mx-3 fw-semibold"> Đăng nhập </a>
                    <a href="{{URL :: to('/sigup')}}" class="text-white text-decoration-none px-3 py-1 rounded-3 fw-bold" style="background-color:blue"> Đăng ký</a>
                </div>
            </div>
        </div>
    </nav>
    </nav>
    <div data-aos="fade-up" class="container d-flex justify-content-center align-items-center min-vh-100">
        <!----------------------- Login Container -------------------------->
        <div class="row border rounded-5 p-3 bg-white shadow box-area">
            <!--------------------------- Left Box ----------------------------->
            <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box order-sm-1" style="background: #ffffff;">
                <div class="featured-image mb-3">
                    <img src="{{('public/FontEnd/assets/images/20547283_6310507.jpg')}}" class="img-fluid rounded w-100" style="width: 350px;">
                </div>
                <!--<p class="text-white fs-2" style="font-family: 'Courier New', Courier, monospace; font-weight: 600;">Be Verified</p>
               <small class="text-white text-wrap text-center" style="width: 17rem;font-family: 'Courier New', Courier, monospace;">Join experienced Designers on this platform.</small>-->
            </div>
            <!-------------------- ------ Right Box ---------------------------->
            <div class="col-md-6 right-box border-end">
                <div class="row align-items-center">
                    <div class="header-text mb-4 text-center">
                        <h2>Đăng ký</h2>
                        <small>Đăng ký theo các bước sau để tạo tài khoản</small>
                    </div>
                    <form id="formsignup" action="{{ route('save_account') }}" method="post">
                        @csrf
                        <div class="input-group mb-3">
                            <input type="text" name="hovaten" class="form-control form-control-lg bg-light fs-6 mb-1" placeholder="Họ và Tên" required />


                        </div>
                        <div class="input-group mb-3 date" id="datepicker">
                            <input type="text" name='ngaysinh' class="form-control form-control-lg bg-light fs-6 mb-1" placeholder="Ngày sinh" required />

                            <span class="input-group-append">
                                <span class="input-group-text bg-white d-block">
                                    <i class="fa fa-calendar mb-1 py-1"></i>
                                </span>
                            </span>
                        </div>
                        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
                        <script src="https://cdn.jsdelivr.net/npm/flatpickr@4.6.3/dist/flatpickr.min.js"></script>
                        <script>
                            $(document).ready(function() {
                                flatpickr("#datepicker", {
                                    dateFormat: "Y-m-d",
                                    onChange: function(selectedDates, dateStr, instance) {
                                        $("#datepicker input").val(dateStr);
                                    }

                                });
                            });
                        </script>
                        <div class="input-group mb-3">
                            <input type="text" name='email' class="form-control form-control-lg bg-light fs-6 mb-1" placeholder="Email" required />

                        </div>
                        <div class="input-group mb-3">
                            <input type="text" name='sodienthoai' class="form-control form-control-lg bg-light fs-6 mb-1" placeholder="Số điện thoại" required />

                        </div>
                        <div class="input-group mb-1">
                            <input type="password" name='matkhau' class="form-control form-control-lg bg-light fs-6 mb-3" placeholder="Mật khẩu " required />

                        </div>
                        <div class="input-group mb-1">
                            <input type="password" name='matkhau2' class="form-control form-control-lg bg-light fs-6 mb-4" placeholder="Nhập lại mật khẩu" required />
                        </div>
                        <?php
                        $thongbaokhongkhop = session("thongbaokhongkhop");
                        $thongbaothanhcong = session("thongbaothanhcong");

                        if ($thongbaokhongkhop) {
                            echo '<span style="color:red">' . $thongbaokhongkhop . '</span>';
                            session(["thongbaokhongkhop" => null]);
                        }

                        if ($thongbaothanhcong) {
                            echo "<script>";
                            echo "document.addEventListener('DOMContentLoaded', function () {";
                            echo "const section = document.querySelector('section'),";
                            echo "overlay = document.querySelector('.overlay'),";
                            echo "showBtn = document.querySelector('.show-modal'),";
                            echo "closeBtn = document.querySelector('.close-btn');";

                            echo "section.classList.add('active');";

                            echo "overlay.addEventListener('click', () =>";
                            echo "section.classList.remove('active')";
                            echo ");";

                            echo "closeBtn.addEventListener('click', () =>";
                            echo "section.classList.remove('active')";
                            echo ");";

                            echo "const signupBtn = document.querySelector('.signup-btn');";

                            echo "signupBtn.addEventListener('click', function () {";
                            echo "window.location.href = 'login.html';";
                            echo "});";

                            echo "});";
                            echo "</script>";
                            session(["thongbaothanhcong" => null]);
                        }
                        ?>

                        <div class="input-group mb-3">
                            <section class="input-group mb-3">
                                <button class="btn btn-lg btn-primary w-100 fs-6 rounded-2 show-modal">Đăng ký</button>
                                <span class="overlay"></span>

                                <div class=" rounded-5 modal-box">
                                    <i class="fa-regular fa-circle-check"></i>
                                    <h2>Hoàn thành</h2>
                                    <h3>Bạn đã đăng ký thành công tài khoản.</h3>

                                    <div class="buttons">
                                        <button class="btn btn-lg btn-primary fs-6 rounded-3 close-btn">Đóng</button>
                                        <button class="btn btn-lg btn-primary fs-6 rounded-3 sigup-btn">Đăng nhập</button>
                                    </div>

                                </div>
                            </section>
                        </div>
                    </form>
                    <div class="row">
                        <small>Đã có tài khoản? <a href="{{URL :: to('/login')}}">Đăng nhập ngay</a></small>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- FOOTER -->
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- jsdelivr -->
    <script src="https://cdn.jsdelivr.net/npm/@barba/core"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="{{('public/FontEnd/assets/js/main.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
</body>

</html>