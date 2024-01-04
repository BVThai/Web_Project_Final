<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Elixir - Bootstrap Template</title>
    <!-- Bootstrap 5 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@@fancyapps/ui@4.0/dist/fancybox.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght@100" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('public/FontEnd/assets/css/style.css')}}">
    <!-- Remove Bootstrap 4 CSS -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lobster+Two&display=swap" rel="stylesheet">
    <!-- my css file-->
    <link rel="stylesheet" type="text/css" href="videochat2.css">
    <script src='https://meet.jit.si/external_api.js'></script>

    <style>
        /* #start {
            position: absolute;
            top: 225px;
            left: 50%;
            transform: translateX(-50%);
        } */

        #jitsi-container {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            margin-left: -15px !important;
            z-index: 9999999;
            margin-top: 0px;
        }

        .show-jitsi {
            display: block !important;
        }
    </style>
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-barba="wrapper">
    <!--Header-->
    <!--Navbar-->
    <div id="jitsi-container" class="container align-items-center"></div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light bg-gradient fixed-top">
        <div class="container">
            <a class="navbar-brand fs-4 fw-bolder" asp-controller="Home" style="color: #4e57d4;">ZenLish</a>
            <button class="navbar-toggler shadow-none border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link fw-semibold mx-3" aria-current="page" href="#about">Về chúng tôi</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Chương trình học
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" asp-controller="Home" asp-action="Ielts">Khóa học IELTS</a></li>
                            <li><a class="dropdown-item" asp-controller="Home" asp-action="Toiec">Khóa học TOEIC</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-semibold mx-3" asp-controller="Home" asp-action="GetTeacher">Giáo viên</a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </nav>
    <section id="hero" class="min-vh-100 d-flex align-items-center text-center">
        <div class="container">
            <div class="row">
                <div class="row">
                    <div class="col-12 py-3">
                        <div class="section-title">
                            <h1 class="display-4 fw-semibold text-center" style="color:white; padding-top: 100px;">
                                Bắt đầu buổi học
                            </h1>
                            <div class="line" style="background-color: white;"></div>
                            <button id="start" class="fw-semibold text-center btn btn-outline-secondary" style="color:white;" type="button"><b>Start a new meeting</b></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- <div class="row">
        <div class="col-12 py-3">
            <div class="section-title">
                <h1 class="display-4 fw-semibold text-center"
                    style="color:#4e57d4; padding-top: 100px;">
                    Bắt đầu buổi học
                </h1>
                <button id="start" class="fw-semibold text-center btn btn-outline-primary" type="button"><b>Start a new meeting</b></button>
                <div class="line"></div>
            </div>
        </div>
        <div class="col-12 ">
            <div class="bg-white rounded p-2">
                <ul class="nav nav-tabs">
                    <li class="nav-item ">
                        <a class="nav-link active" data-bs-toggle="tab" href="#all">Zenlish</a>
                    </li>
                </ul>
                <div class="row">
                    <div class="col-12">
                        <div class="">
                            <div id="all" class="tab-pane fade in active show">
                                <div class="row"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

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
                            <li>
                                <a href="#">
                                    Đội ngũ giảng viên
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Chương trình học
                                </a>
                            </li>
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
    <script src="https://unpkg.com/@@barba/core"></script>
    <!-- jsdelivr -->
    <script src="https://cdn.jsdelivr.net/npm/@@barba/core"></script>
    <!-- Bootstrap 5 JS, jQuery, and Custom Script -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="{{asset('public/FontEnd/assets/js/main.js')}}"></script>
    <!-- Your custom script -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        var button = document.querySelector('#start');
        var container = document.querySelector('#jitsi-container');
        var api = null;

        button.addEventListener('click', () => {
            var possible = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
            var stringLength = 30;

            function pickRandom() {
                return possible[Math.floor(Math.random() * possible.length)];
            }

            var randomString = Array.apply(null, Array(stringLength)).map(pickRandom).join('');

            var domain = "meet.jit.si";
            var screenWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
            var screenHeight = window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight;

            var options = {
                "roomName": randomString,
                "parentNode": container,
                "width": screenWidth,
                "height": "100%",
            };
            api = new JitsiMeetExternalAPI(domain, options);
            container.classList.add('show-jitsi');
            var opt = options.roomName;
            $.ajax({
                type: "POST",
                url: '{{URL("/Thembuoihoconline")}}',
                data: {
                    domain: domain,
                    options: opt
                },
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    console.log('Success:', response);
                    // Thực hiện các hành động khác nếu cần
                },
                error: function(error) {
                    console.error('Error:', error);
                }
            });
        });
    </script>
</body>

</html>