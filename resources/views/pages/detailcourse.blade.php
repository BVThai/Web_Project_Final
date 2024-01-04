@extends('layoutstudent')
@section ('student_content')
<link rel="stylesheet" href="{{asset('public/FontEnd/assets/css//hocsinh-ieltsFD.css')}}">
<section id="payment" class="min-vh-80 d-flex align-items-center" style="padding-top: 140px;
  padding-bottom: 140px;">
    <div class="container">
        <div class="row">
            @foreach($mota as $key => $mota)
            <div class="col-lg-6" style="padding-top: 80px;">
                <h2 data-aos="fade-left" class="text-uppercase text-white fw-semibold">{{$mota->TENKHOAHOC}}</h2>
                <p class="text-white mt-3 mb-4 fs-5" data-aos="fade-right">
                   {{$mota->MOTA}}
                </p>
            </div>

            <div class="col-lg-6 rounded" style="background-color: white; padding-bottom: 20px;">
                <div class="container fs-5 fw-semibold" style="color: black; padding-top: 20px;">
                    Lớp học đang được mở!
                    <div class="row">
                        <p class="fs-6" style="color:gray"> Đăng ký ngay trước ngày ... để đảm bảo được chỗ học của bạn!</p>
                    </div>
                    <div class="row rounded" style="height: 55px; background-color: #4e57d4; color: white; padding-top: 10px;">
                        <a href="{{URL :: to('/PaymentMethod/'.$mota->MAKHOAHOC)}}" class="text-center rounded" style="background-color: #4e57d4; color: white;"> Mua ngay </a>
                    </div>
                    <div class="row rounded border border-primary" style="border-color: #4e57d4; height: 55px; background-color: white; margin-top: 15px; padding-top: 10px;">
                        <a href="#main-course" class="text-center rounded" style="color:#4e57d4"> Tìm hiểu thêm </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    </div>
</section>
<section id="main-course" class="align-items-center" style="padding-top: 140px; padding-bottom: 140px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="row rounded text-center" style="background-color: #4e57d4; height:80px; padding-top: 10px; margin-bottom: 20px;">
                    <a class="fs-5 fw-bolder pt-3" style="color: white;"> Đối tượng </a>
                </div>
                <div class="row rounded text-center" style="background-color: #4e57d4; height:50px; padding-top: 10px; margin-bottom: 20px;">
                    <a class="fs-5 fw-bolder " style="color: white;"> Thời gian khóa học </a>
                </div>
                <div class="row rounded text-center" style="background-color: #4e57d4; height:50px; padding-top: 10px; margin-bottom: 20px;">
                    <a class="fs-5 fw-bolder" style="color: white;"> Thời lượng khóa học </a>
                </div>
                <div class="row rounded text-center" style="background-color: #4e57d4; height:50px; padding-top: 10px; margin-bottom: 20px;">
                    <a class="fs-5 fw-bolder" style="color: white;"> Mục tiêu </a>
                </div>
                <div class="row rounded text-center" style="background-color: #4e57d4; height:50px; padding-top: 10px; margin-bottom: 20px;">
                    <a class="fs-5 fw-bolder" style="color: white;"> Nội dung khóa học </a>
                </div>
            </div>
            <div class="col-auto"> </div>
            <div class="col-lg-8">
                <div class="row rounded" style="background-color: rgba(109, 195, 161, 0.28); height:80px; padding-top: 10px; margin-bottom: 20px; padding-left: 10px;">
                    <a class="fs-5" style="color:#000000"> Dành cho học viên có nền tảng cơ bản, ngữ pháp khá, từ vựng hạn chế,
                        nghe, đọc, nói chưa đủ kỹ năng. </a>
                </div>
                <div class="row rounded" style="background-color: rgba(109, 195, 161, 0.28); height:50px; padding-top: 10px; margin-bottom: 20px; padding-left: 10px;">
                    <a class="fs-5" style="color:#000000">
                        @if($lophoc)
                            Từ: {{ \Carbon\Carbon::parse($lophoc->THOIGIANBATDAU)->format('d/m/Y') }} - đến: {{ \Carbon\Carbon::parse($lophoc->THOIGIANKETTHUC)->format('d/m/Y') }} 
                        @endif
                    </a>
                </div>
                <div class="row rounded" style="background-color: rgba(109, 195, 161, 0.28); height:50px; padding-top: 10px; margin-bottom: 20px; padding-left: 10px;">
                    <a class="fs-5" style="color:#000000"> 57 buổi (2 buổi/ tuần trong 7,5 tháng). </a>
                </div>
                <div class="row rounded" style="background-color: rgba(109, 195, 161, 0.28); height:50px; padding-top: 10px; margin-bottom: 20px; padding-left: 10px;">
                    <a class="fs-5" style="color:#000000">Củng cố ngữ pháp và trao dồi từ vựng, bước đầu làm quen với phát âm</a>
                </div>
                <div class="row rounded" style="background-color: rgba(109, 195, 161, 0.28); height:600px; padding-top: 10px; margin-bottom: 20px; padding-left: 10px; display: flex;">
                    <ul class="fs-5" style="color:#000000; margin-left: 20px;">
                        <p class="mb-1"> <strong> Reading: </strong> Làm quen với các dạng bài cơ bản và thường xuyên xuất hiện trong đề thi: </p>
                        <li class="ms-5"> Note/Summary/Sentence Completion. </li>
                        <li class="ms-5"> Multiple choice. </li>
                        <li class="ms-5"> Flowchart/Diagram Completion. </li>
                        <p class="mb-1"> <strong> Listening: </strong> Phương pháp, kĩ năng, chiến thuật làm bài 4 dạng đề thường gặp trong đề thi: </p>
                        <li class="ms-5"> Multiple Choice Question.</li>
                        <li class="ms-5"> Short Answer. </li>
                        <li class="ms-5"> Sentence Completion – Summary Completion. </li>
                        <li class="ms-5"> Table Completion. </li>
                        <p class="mb-1"> <strong> Speaking: </strong>
                            <li class="ms-5"> Nắm chắc và hiểu rõ 4 tiêu chí chấm điểm kĩ năng nói. </li>
                            <li class="ms-5"> Xây dựng phương pháp phản xạ nhanh cho Part 1 và mở rộng ý tưởng cho Part 2. </li>
                        <p class="mb-1"> <strong> Writing: </strong>
                            <li class="ms-5"> Học từ vựng và cấu trúc câu nhằm phục vụ cho việc mô tả các loại biểu đồ trên. </li>
                            <li class="ms-5"> Phân tích số liệu với các biểu đồ đơn giản như: cách chọn số liệu, các so sánh đối chiếu, tương quan giữa các đối tượng trong biểu đồ line graph, bar chart, pie chart. </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection