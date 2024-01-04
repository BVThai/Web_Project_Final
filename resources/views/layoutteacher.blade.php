<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/ae360af17e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('public/FontEnd/assets/css//style-gv.css')}}">
    <link rel="stylesheet" href="{{asset('public/FontEnd/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('public/FontEnd/assets/css/style-gvkhddct.css')}}"> 
    <link rel="stylesheet" href="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.css">
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>

</head>

<body>
    <div class="wrapper">
        <aside id="sidebar" class="js-sidebar">
            <!-- Content For Sidebar -->
            <div class="h-100">
                <div class="sidebar-logo">
                    <a href="#">ZenLish</a>
                </div>
                <ul class="sidebar-nav">
                    <li class="sidebar-item">
                        <a href="{{URL :: to('/Teacher')}}" class="sidebar-link">
                            <i class="fa-solid fa-list pe-2" style="color: white;"></i>
                            Trang chủ
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link collapsed" data-bs-target="#pages" data-bs-toggle="collapse"
                           aria-expanded="false">
                            <i class="fa-solid fa-file-lines pe-2"></i>
                            Các khóa học
                        </a>
                        <ul id="pages" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a href="{{URL :: to('/Allcourseteach')}}" class="sidebar-link">Khóa học đang dạy</a>
                            </li>
                            <li class="sidebar-item">
                                <a  href="{{URL :: to('/Allcourseteach')}}"  class="sidebar-link">Khóa học hoàn thành</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a href="{{URL :: to('/Tatcalichday')}}" class="sidebar-link" data-bs-target="#posts" aria-expanded="false">
                            <i class="fa-solid fa-user pe-2"></i>
                            Xem toàn bộ lịch dạy
                        </a>
                    </li>
                </ul>
            </div>
        </aside>
        <div class="main">
            <nav class="navbar navbar-expand px-3 border-bottom">
                <button class="btn" id="sidebar-toggle" type="button">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse navbar">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a href="#" data-bs-toggle="dropdown" class="nav-icon pe-md-0">
                                <img src="public/Uploads/Teacher/{{session('anhgiaovien')}}" class="avatar img-fluid rounded" alt="">
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="giaovien-ttcn.html" class="dropdown-item">Thông tin cá nhân</a>
                                <a href="{{URL :: to('/logout')}}" class="dropdown-item">Đăng xuất</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            @yield('content_teacher')
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row text-muted">
                        <div class="col-6 text-start">
                            <p class="mb-0">
                                <a href="#" class="text-muted">
                                    <strong>ZenLish</strong>
                                </a>
                            </p>
                        </div>
                        <div class="col-6 text-end">
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <a href="#" class="text-muted">Contact</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="text-muted">About Us</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="text-muted">Terms</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="text-muted">Booking</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
            </div>
        </div>
    </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"></script>
        <script src="{{('public/FontEnd/assets/js/giaovien-js.js')}}"></script>

</body>

</html>