@extends('welcome')
@section ('content')
<section id="hero" class="min-vh-100 d-flex align-items-center text-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 data-aos="fade-left" class="text-uppercase text-white fw-semibold display-1">Tiếng anh <br> dẫn đầu bởi thế hệ mới</h1>
                    <h5 class="text-white mt-3 mb-4" data-aos="fade-right">CHÚNG TÔI TỰ HÀO LÀ NHỮNG NGƯỜI MANG ĐẾN SỰ ĐỘT PHÁ </h5>
                    <div data-aos="fade-up" data-aos-delay="50">
                        <a href="#" class="btn btn-brand me-2">Bắt đầu ngay!</a>
                        <a href="#" class="btn btn-light ms-2">Khóa học</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ABOUT -->
    <section id="about" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" data-aos="fade-down" data-aos-delay="50">
                    <div class="section-title">
                        <h1 class="display-4 fw-semibold">Về chúng tôi</h1>
                        <div class="line"></div>
                        <p>Chúng tôi tin rằng việc truyền đạt những kiến thức theo một cách tận tâm là điều quan trọng nhất</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-6 order-sm-1" data-aos="fade-down" data-aos-delay="50">
                    <img src="{{('public/FontEnd/assets/images/colleagues-reading-using-laptop-during-study-session (1).jpg')}}" alt="">
                </div>
                <div data-aos="fade-down" data-aos-delay="150" class="col-lg-5">
                    <h1>Về ZenList</h1>
                    <p class="mt-3 mb-4">Được thành lập bởi những con người mang đầy tâm huyết về tương lai giáo dục sau này với 3 tiêu chí sau: </p>
                    <div class="d-flex pt-4 mb-3">
                        <div class="iconbox me-4">
                            <i class="ri-mail-send-fill"></i>
                        </div>
                        <div>
                            <h5>Đội ngũ giảng viên</h5>
                            <p>Trình độ chuyên môn cao, có kinh nghiệm giảng dạy và sự đam mê!</p>
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <div class="iconbox me-4">
                            <i class="ri-user-5-fill"></i>
                        </div>
                        <div>
                            <h5>Chương trình học</h5>
                            <p>Phong phú và linh hoạt, phù hợp với nhiều mục tiêu học tập và trình độ của học viên!</p>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="iconbox me-4">
                            <i class="ri-rocket-2-fill"></i>
                        </div>
                        <div>
                            <h5>Phương pháp giảng dạy</h5>
                            <p>Phương pháp giảng dạy hiện đại, sử dụng công nghệ và tài liệu học tập đa phương tiện giúp tăng cường tương tác!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SERVICES -->
    <section id="services" class="section-padding border-top">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" data-aos="fade-down" data-aos-delay="150">
                    <div class="section-title">
                        <h1 class="display-4 fw-semibold">Phương pháp <br> riêng cho từng học viên</h1>
                        <div class="line"></div>
                        <p>Sử dụng công nghệ hiện đại giúp tăng hiệu quả học tiếng anh</p>
                    </div>
                </div>
            </div>
            <div class="row g-4 text-center">
                <div class="col-lg-4 col-sm-6" data-aos="fade-down" data-aos-delay="150">
                    <div class="service theme-shadow p-lg-5 p-4">
                        <div class="iconbox">
                            <i class="ri-pen-nib-fill"></i>
                        </div>
                        <h5 class="mt-4 mb-3">Lớp học nhỏ</h5>
                        <p>Chú tâm vào từng học viên để mang lại kết quả tốt nhất </p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6" data-aos="fade-down" data-aos-delay="250">
                    <div class="service theme-shadow p-lg-5 p-4">
                        <div class="iconbox">
                            <i class="ri-stack-fill"></i>
                        </div>
                        <h5 class="mt-4 mb-3">Chương trình học hấp dẫn</h5>
                        <p>Chương trình học theo tiêu chuẩn quốc tế, tăng khả năng tương tác thầy-trò</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6" data-aos="fade-down" data-aos-delay="350">
                    <div class="service theme-shadow p-lg-5 p-4">
                        <div class="iconbox">
                            <i class="ri-ruler-2-fill"></i>
                        </div>
                        <h5 class="mt-4 mb-3">Linh động thời gian</h5>
                        <p>Thời gian được học viên tự sắp xếp mang lại tính thoải mái, tiện lợi</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6" data-aos="fade-down" data-aos-delay="450">
                    <div class="service theme-shadow p-lg-5 p-4">
                        <div class="iconbox">
                            <i class="ri-pie-chart-2-fill"></i>
                        </div>
                        <h5 class="mt-4 mb-3">Mô hình lớp học đảo ngược</h5>
                        <p>Trải nghiệm các video thú vị, đa dạng thông tin trước khi bắt đầu lớp học</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6" data-aos="fade-down" data-aos-delay="550">
                    <div class="service theme-shadow p-lg-5 p-4">
                        <div class="iconbox">
                            <i class="ri-code-box-line"></i>
                        </div>
                        <h5 class="mt-4 mb-3">Báo cáo tiến độ</h5>
                        <p>Báo cáo tiến độ thường xuyên và theo sát lộ trình học của học viên</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6" data-aos="fade-down" data-aos-delay="650">
                    <div class="service theme-shadow p-lg-5 p-4">
                        <div class="iconbox">
                            <i class="ri-user-2-fill"></i>
                        </div>
                        <h5 class="mt-4 mb-3">Sử dụng công nghệ độc quyền</h5>
                        <p>Công nghệ học tập hiện đại, tăng khả năng tương tác hiệu quả</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- COUNTER -->
    <section id="counter" class="section-padding">
        <div class="container text-center">
            <div class="row g-4">
                <div class="col-lg-3 col-sm-6" data-aos="fade-down" data-aos-delay="150">
                    <h1 class="text-white display-4">10K+</h1>
                    <h6 class="text-uppercase mb-0 text-white mt-3">Học viên đã tham gia</h6>
                </div>
                <div class="col-lg-3 col-sm-6" data-aos="fade-down" data-aos-delay="250">
                    <h1 class="text-white display-4">3K+</h1>
                    <h6 class="text-uppercase mb-0 text-white mt-3">Học viên tiếp tục đồng hành</h6>
                </div>
                <div class="col-lg-3 col-sm-6" data-aos="fade-down" data-aos-delay="350">
                    <h1 class="text-white display-4">500+</h1>
                    <h6 class="text-uppercase mb-0 text-white mt-3">Lớp học đang được giảng dạy</h6>
                </div>
                <div class="col-lg-3 col-sm-6" data-aos="fade-down" data-aos-delay="450">
                    <h1 class="text-white display-4">250+</h1>
                    <h6 class="text-uppercase mb-0 text-white mt-3">Đội ngũ giảng viên</h6>
                </div>
            </div>
        </div>
    </section>
    <section id="team" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" data-aos="fade-down" data-aos-delay="150">
                    <div class="section-title">
                        <h1 class="display-4 fw-semibold">Đội ngũ giảng viên<br> chuẩn quốc tế giảng dạy tại <a style="color:#4e57d4"> ZenLish </a></h1>
                        <div class="line"></div>
                    </div>
                </div>
            </div>
            <div class="row g-4 text-center ">
                <div class="col-md-4" data-aos="fade-down" data-aos-delay="150">
                    <div class="team-member image-zoom">
                        <div class="image-zoom-wrapper">
                            <img src="{{('public/FontEnd/assets/images/person-1.jpg')}}" alt="">
                        </div>
                        <div class="team-member-content">
                            <h4 class="text-white">Tuyển dụng nghiêm ngặt</h4>
                            <p class="mb-0 text-white"></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-down" data-aos-delay="250">
                    <div class="team-member image-zoom">
                        <div class="image-zoom-wrapper">
                            <img src="{{('public/FontEnd/assets/images/person-2.jpg')}}" alt="">
                        </div>
                        <div class="team-member-content">
                            <h4 class="text-white">Quy trình đào tạo toàn diện</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-down" data-aos-delay="350">
                    <div class="team-member image-zoom">
                        <div class="image-zoom-wrapper">
                            <img src="{{('public/FontEnd/assets/images/person-3.jpg')}}" alt="">
                        </div>
                        <div class="team-member-content">
                            <h4 class="text-white">Kiểm soát chất lượng hàng ngày</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- REVIEW -->
    <section id="reviews" class="section-padding bg-light">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" data-aos="fade-down" data-aos-delay="150">
                    <div class="section-title">
                        <h1 class="display-4 fw-semibold">Feedback</h1>
                        <div class="line"></div>
                        <p>Những đánh giá trực tiếp từ <br> những học viên đã trải nghiệm tại trung tâm</p>
                    </div>
                </div>
            </div>
            <div class="row gy-5 gx-4">
                <div class="col-lg-4 col-sm-6" data-aos="fade-down" data-aos-delay="150">
                    <div class="review">
                        <div class="review-head p-4 bg-white theme-shadow">
                            <div class="text-warning">
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                            </div>
                            <p>Trung tâm tiếng Anh này là nơi tuyệt vời để nâng cao khả năng tiếng Anh của bạn. Giáo viên tận tâm và có kiến thức sâu về ngôn ngữ, và phương pháp giảng dạy đa dạng và phù hợp với mọi trình độ học viên.</p>
                        </div>
                        <div class="review-person mt-4 d-flex align-items-center">
                            <img class="rounded-circle" src="{{('public/FontEnd/assets/images/avatar-1.jpg')}}" alt="">
                            <div class="ms-3">
                                <h5>Nguyễn Minh Tuấn</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6" data-aos="fade-down" data-aos-delay="250">
                    <div class="review">
                        <div class="review-head p-4 bg-white theme-shadow">
                            <div class="text-warning">
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                            </div>
                            <p>Tôi đã tham gia khóa học tiếng Anh tại trung tâm này và thật sự ấn tượng với môi trường học tập chuyên nghiệp và thân thiện. Các hoạt động thực hành và tương tác trong lớp học giúp tôi tự tin giao tiếp tiếng Anh hơn.</p>
                        </div>
                        <div class="review-person mt-4 d-flex align-items-center">
                            <img class="rounded-circle" src="{{('public/FontEnd/assets/images/avatar-2.jpg')}}" alt="">
                            <div class="ms-3">
                                <h5>Trần Đức Anh</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6" data-aos="fade-down" data-aos-delay="350">
                    <div class="review">
                        <div class="review-head p-4 bg-white theme-shadow">
                            <div class="text-warning">
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                            </div>
                            <p>Trung tâm tiếng Anh này đáng giá để đầu tư thời gian và tiền bạc. Các khóa học được thiết kế rõ ràng và có cấu trúc logic, giúp học viên tiến bộ theo từng cấp độ liên tục. Các hoạt động thực hành, tương tác giúp tôi tự tin giao tiếp tiếng Anh.</p>
                        </div>
                        <div class="review-person mt-4 d-flex align-items-center">
                            <img class="rounded-circle" src="{{('public/FontEnd/assets/images/avatar-3.jpg')}}" alt="">
                            <div class="ms-3">
                                <h5>Lê Văn Hải</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6" data-aos="fade-down" data-aos-delay="450">
                    <div class="review">
                        <div class="review-head p-4 bg-white theme-shadow">
                            <div class="text-warning">
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                            </div>
                            <p>Một điểm mạnh của trung tâm là sự sáng tạo trong việc sử dụng công nghệ và tài liệu học tập hiện đại. Tôi đã được tiếp cận với nhiều tài liệu học trực tuyến và phần mềm học tiếng Anh đa dạng, giúp tăng tính thú vị và hiệu quả trong quá trình học.</p>
                        </div>
                        <div class="review-person mt-4 d-flex align-items-center">
                            <img class="rounded-circle" src="{{('public/FontEnd/assets/images/avatar-4.jpg')}}" alt="">
                            <div class="ms-3">
                                <h5>Phạm Quang Long</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6" data-aos="fade-down" data-aos-delay="550">
                    <div class="review">
                        <div class="review-head p-4 bg-white theme-shadow">
                            <div class="text-warning">
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                            </div>
                            <p>Tôi đã thấy sự tiến bộ rõ rệt trong khả năng ngôn ngữ của mình sau khi học tại trung tâm này. Các bài tập và bài kiểm tra đánh giá định kỳ giúp tôi theo dõi tiến độ học tập của mình và nhận phản hồi từ giáo viên để cải thiện kỹ năng.</p>
                        </div>
                        <div class="review-person mt-4 d-flex align-items-center">
                            <img class="rounded-circle" src="{{('public/FontEnd/assets/images/avatar-5.jpg')}}" alt="">
                            <div class="ms-3">
                                <h5>Võ Hoàng Nam</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6" data-aos="fade-down" data-aos-delay="650">
                    <div class="review">
                        <div class="review-head p-4 bg-white theme-shadow">
                            <div class="text-warning">
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                            </div>
                            <p>Môi trường học tập tại trung tâm rất đa dạng và quốc tế. Tôi có cơ hội giao tiếp với các bạn học viên đến từ nhiều quốc gia khác nhau, mở rộng kiến thức về văn hóa và tiếng Anh trong một môi trường đa văn hóa.</p>
                        </div>
                        <div class="review-person mt-4 d-flex align-items-center">
                            <img class="rounded-circle" src="{{('public/FontEnd/assets/images/avatar-6.jpg')}}" alt="">
                            <div class="ms-3">
                                <h5>Hoàng Minh Đạt</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection