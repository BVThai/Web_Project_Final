@extends('layoutteacher')
@section ('content_teacher')
<div class="container">
    <h2 class="text-center mt-3"></h2>
    <div class="container py-5">
        <div class="row">
            <div class="col-12 py-3">
                <div class="section-title">
                    <h1 class="display-4 fw-semibold text-center"
                        style="color:#4e57d4; padding-top: 100px;">
                        Thời khóa biểu
                    </h1>
                    <div class="line"></div>
                </div>

            </div>
            <div class="col-12 ">
                <div class="bg-white rounded p-2">
                    <ul class="nav nav-tabs">
                        <li class="nav-item ">
                            <a class="nav-link active" data-bs-toggle="tab" href="#all">Thời khóa biểu</a>

                        </li>
                    </ul>
                    <div class="row">
                        <div class="col-12">
                            <div class="tab-content p-4 ">
                                <div id="all" class="tab-pane fade in active show">
                                    <div class="row table-responsive">
                                        @foreach ($thongtinlop as $key=>$value)
                                            <h3>Khóa học: {{ $value->TENKHOAHOC }} - từ {{ \Carbon\Carbon::parse($value->THOIGIANBATDAU)->format('d/m/Y') }} - đến {{ \Carbon\Carbon::parse($value->THOIGIANKETTHUC)->format('d/m/Y') }}</h3>
                                            <h4>Lớp học: {{$value->TENLOPHOC}}</h4>
                                            <table class="table table-bordered mt-3">
                                                <thead>
                                                    <tr class="table-warning">
                                                        <th></th>
                                                        <th>Thời gian bắt đầu</th>
                                                        <th>Thời gian kết thúc</th>
                                                        <!-- Add more columns as needed -->
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($thongtinlichhocData[$value->MALOPHOC] as $key=>$schedule)
                                                        <tr>
                                                            <td>{{$schedule->THU}}</td>
                                                            <td>{{$schedule->GIOBATDAU}}</td>
                                                            <td>{{$schedule->GIOBATDAU}}</td>

                                                            <!-- Add more columns as needed -->
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
