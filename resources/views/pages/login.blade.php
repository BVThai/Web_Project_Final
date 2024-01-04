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
    <link rel="stylesheet" href="{{('public/FontEnd/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{('public/FontEnd/assets/loginpage/login.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
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
            <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box" style="background: #ffffff;">
                <div class="featured-image mb-3">
                    <img src="{{('public/FontEnd/assets/images/LoginIMG.jpg')}}" class="img-fluid rounded w-100" style="width: 350px;">
                </div>
                <!--<p class="text-white fs-2" style="font-family: 'Courier New', Courier, monospace; font-weight: 600;">Be Verified</p>
               <small class="text-white text-wrap text-center" style="width: 17rem;font-family: 'Courier New', Courier, monospace;">Join experienced Designers on this platform.</small>-->
            </div>
            <!-------------------- ------ Right Box ---------------------------->
            <div class="col-md-6 right-box border-start">
                <div class="row align-items-center">
                    <div class="header-text mb-4 text-center">
                        <h2>Chào mừng!</h2>
                    </div>



                    <form action="{{ route('sigupsucess') }}" method="post">
                        @csrf
                        <div class="input-group mb-3">
                            <input type="text" name='taikhoan' class="form-control form-control-lg bg-light fs-6 mb-1" placeholder="Tài khoản">
                        </div>
                        <div class="input-group mb-1">
                            <input type="password" name='matkhau' class="form-control form-control-lg bg-light fs-6 mb-3" placeholder="Mật khẩu">
                        </div>
                        <?php
                        $message = session("message");
                        if ($message) {
                            echo '<span style = "color:red">'.$message.'</span>';
                            session(["message" => null]);
                        }

                        ?>
                        <div class="input-group mb-4 d-flex justify-content-between">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="formCheck">
                                <label for="formCheck" class="form-check-label text-secondary"><small>Ghi nhớ tài khoản</small></label>
                            </div>
                            <div class="forgot">
                                <small><a href="#">Quên mật khẩu?</a></small>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <button  type="submit" name='namelogin' value='vallogin' class="btn btn-lg btn-primary w-100 fs-6 rounded-2">Đăng nhập</button>
                        </div>
                    </form>
                    <div class="row">
                        <small>Không có tài khoản? <a href="{{URL :: to('/sigup')}}">Đăng ký ngay</a></small>
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
    <!-- jsdelivr -->
    <script src="https://cdn.jsdelivr.net/npm/@barba/core"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="{{('public/FontEnd/assets/js/main.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
</body>

</html>