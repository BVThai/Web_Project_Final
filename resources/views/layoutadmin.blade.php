<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="robots" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Fillow : Fillow Saas Admin  Bootstrap 5 Template">
    <meta property="og:title" content="Fillow : Fillow Saas Admin  Bootstrap 5 Template">
    <meta property="og:description" content="Fillow : Fillow Saas Admin  Bootstrap 5 Template">
    <meta property="og:image" content="https://fillow.dexignlab.com/xhtml/social-image.png">
    <meta name="format-detection" content="telephone=no">

    <!-- PAGE TITLE HERE -->
    <title>Admin Dashboard</title>

    <!-- FAVICONS ICON -->
    <link rel="shortcut icon" type="image/png" href="{{asset('public/FontEnd/adminpage/admin_pages/images/favicon.png')}}">
    <!-- Datatable -->
    <link href="{{asset('public/FontEnd/adminpage/admin_pages/vendor/datatables/css/jquery.dataTables.min.css')}}" rel="stylesheet">
    <!-- Custom Stylesheet -->
    <link href="{{asset('public/FontEnd/adminpage/admin_pages/vendor/jquery-nice-select/css/nice-select.css')}}" rel="stylesheet">
    <link href="{{asset('public/FontEnd/adminpage/admin_pages/css/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" type="text/css" href="https://npmcdn.com/flatpickr/dist/themes/material_blue.css">
</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="lds-ripple">
            <div></div>
            <div></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="index.html" class="brand-logo">
                <svg class="logo-abbr" width="55" height="55" viewbox="0 0 55 55" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M27.5 0C12.3122 0 0 12.3122 0 27.5C0 42.6878 12.3122 55 27.5 55C42.6878 55 55 42.6878 55 27.5C55 12.3122 42.6878 0 27.5 0ZM28.0092 46H19L19.0001 34.9784L19 27.5803V24.4779C19 14.3752 24.0922 10 35.3733 10V17.5571C29.8894 17.5571 28.0092 19.4663 28.0092 24.4779V27.5803H36V34.9784H28.0092V46Z" fill="url(#paint0_linear)"></path>
                    <defs>
                    </defs>
                </svg>
                <div class="brand-title">
                    <h2 class="">ZenList</h2>
                    
                </div>
            </a>
            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Chat box start
        ***********************************-->
        <!--**********************************
            Chat box End
        ***********************************-->




        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="dashboard_bar">
                            </div>

                        </div>
                        <ul class="navbar-nav header-right">
                            <li class="nav-item d-flex align-items-center">
                                <div class="input-group search-area">
                                    <input type="text" class="form-control" placeholder="Search here...">
                                    <span class="input-group-text"><a href="javascript:void(0)"><i class="flaticon-381-search-2"></i></a></span>
                                </div>
                            </li>
                            <li class="nav-item d-flex align-items-center">
								
									<p style="margin-right: -10px !important" class="mt-4 badge bgl-primary text-primary fs-18 font-w600">
										<?php
										$username = session("username");
										if ($username) {
											echo $username;
										}
										?>
									</p>

								
							</li>
                            <li class="nav-item dropdown  header-profile">
                                <a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
                                    <img src="{{asset('public/FontEnd/adminpage/admin_pages/images/user.jpg')}}" width="56" alt="">
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="app-profile.html" class="dropdown-item ai-icon">
                                        <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                            <circle cx="12" cy="7" r="4"></circle>
                                        </svg>
                                        <span class="ms-2">Profile </span>
                                    </a>
                                    <a href="email-inbox.html" class="dropdown-item ai-icon">
                                        <svg id="icon-inbox" xmlns="http://www.w3.org/2000/svg" class="text-success" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                            <polyline points="22,6 12,13 2,6"></polyline>
                                        </svg>
                                        <span class="ms-2">Inbox </span>
                                    </a>
                                    <a href="page-error-404.html" class="dropdown-item ai-icon">
                                        <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                            <polyline points="16 17 21 12 16 7"></polyline>
                                            <line x1="21" y1="12" x2="9" y2="12"></line>
                                        </svg>
                                        <span class="ms-2">Logout </span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>

        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="dlabnav">
            <div class="dlabnav-scroll">
                <ul class="metismenu" id="menu">
                    <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                            <i class="fas fa-home"></i>
                            <span class="nav-text">Dashboard</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="#">Dashboard Light</a></li>
                            <li><a href="#">Dashboard Dark</a></li>
                            <li><a href="#">Project</a></li>
                            <li><a href="#">Contacts</a></li>
                            <li><a href="#">Kanban</a></li>
                            <li><a href="#">Calendar</a></li>
                            <li><a href="#">Messages</a></li>
                        </ul>

                    </li>

                    <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                            <i class="fas fa-user"></i>
                            <span class="nav-text">Quản lý học viên</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{URL :: to('/viewallcustomer')}}">Tất cả hoc viên</a></li>
                            <li><a href="{{URL :: to('/viewaddcustomer')}}">Thêm người học viên</a></li>

                        </ul>
                    </li>
                    <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">

                            <i class="fas fa-chalkboard-teacher"></i>
                            <span class="nav-text">Quản lý giáo viên</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{URL :: to('/viewallteacher')}}">Tất cả giáo viên</a></li>
                            <li><a href="{{URL :: to('/viewaddteacher')}}">Thêm giáo viên</a></li>

                        </ul>
                    </li>
                    <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                            <i class="fa fa-book"></i>
                            <span class="nav-text">Quản lý khóa học</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{URL :: to('/viewallcourse')}}">Tất cả khóa học</a></li>
                            <li><a href="{{URL :: to('/viewaddcourse')}}">Thêm khóa học</a></li>

                        </ul>
                    </li>
                    <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                            <i class="fa fa-chalkboard"></i>
                            <span class="nav-text">Quản lý lớp học</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{URL :: to('/viewallclass')}}">Tất cả lớp học</a></li>
                            <li><a href="{{URL :: to('/viewaddclass')}}">Thêm lớp học</a></li>

                        </ul>
                    </li>
                    <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                            <i class="fa fa-calendar-day"></i>
                            <span class="nav-text">Quản lý lịch học</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{URL :: to('/viewallclasscal')}}">Tất cả lịch học</a></li>
                            <li><a href="{{URL :: to('/viewaddclasscal')}}">Thêm lịch học</a></li>

                        </ul>
                    </li>
                    <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                            <i class="fa fa-user-graduate"></i>
                            <span class="nav-text">Học viên của lớp học</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{URL :: to('/viewallstclass')}}">Tất cả </a></li>
                            <li><a href="{{URL :: to('/viewaddstclass')}}">Thêm học viên vào lớp</a></li>

                        </ul>
                    </li>
                    <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                            <i class="fa fa-user-graduate"></i>
                            <span class="nav-text">Danh sách hóa đơn</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{URL :: to('/Tatcathanhtoan')}}">Tất cả hóa đơn </a></li>
                           

                        </ul>
                    </li>
                </ul>
                

                
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        @yield('admin_content')
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="../index.htm" target="_blank">DexignLab</a> 2021</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{asset('public/FontEnd/adminpage/admin_pages/vendor/global/global.min.js')}}"></script>
    <script src="{{asset('public/FontEnd/adminpage/admin_pages/vendor/chart.js/Chart.bundle.min.js')}}"></script>
    <!-- Apex Chart -->
    <script src="{{asset('public/FontEnd/adminpage/admin_pages/vendor/apexchart/apexchart.js')}}"></script>

    <!-- Datatable -->
    <script src="{{asset('public/FontEnd/adminpage/admin_pages/vendor/datatables/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('public/FontEnd/adminpage/admin_pages/js/plugins-init/datatables.init.js')}}"></script>

    <script src="{{('public/FontEnd/adminpage/admin_pages/vendor/jquery-nice-select/js/jquery.nice-select.min.js')}}"></script>

    <script src="{{asset('public/FontEnd/adminpage/admin_pages/js/custom.min.js')}}"></script>
    <script src="{{asset('public/FontEnd/adminpage/admin_pages/js/dlabnav-init.js')}}"></script>
    <script src="{{asset('public/FontEnd/adminpage/admin_pages/js/demo.js')}}"></script>
    <script src="{{asset('public/FontEnd/adminpage/admin_pages/js/styleSwitcher.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
</body>

</html>