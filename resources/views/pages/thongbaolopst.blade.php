@extends('layoutstudent')
@section ('student_content')
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-kJ8U/JA6OQ+YJLxIsqZfL4c2DO8V/6aENZGnt2mi+2DZ++D9pFbBnP0EGaJG9SIf" crossorigin="anonymous">
<style>
    /* Add your custom styles here */
    body {
        background-color: #343a40;
        color: white;
    }

    .card {
        background-color: rgb(209, 209, 209);
        border-radius: 10px;
        padding: 20px;
        margin: 20px 0;
        position: relative; 
    }

    .card-title {
        font-size: 1.5rem;
        margin-bottom: 10px;
    }

    .card-text {
        font-size: 1rem;
        color: black;
        
    }

    .close-icon {
        position: absolute;
        top: 10px;
        right: 10px;
    }

    /* Add more styles as needed */
</style>
<div class="container py-3">
    <div class="row">
        <div class="col-12 py-3">
        </div>
        <div class="col-12">
            <div class="bg-light rounded p-2">
                <div class="row">
                    <div class="col-12 py-2" style="margin-top: 35px;">
                        <div class="section-title">
                            <h1 class="display-6 fw-semibold text-center"> Thông tin chi tiết </h1>
                        </div>
                       
                    </div>
                    <div class="container ps-5">
                        <div class="row">
                            <div class="col-lg-12">
                                
                                @foreach ($dstt as $key=>$value)                               
                                    <div class="card" style="overflow: hidden;">
                                        <h5 class="card-title" style="color: dodgerblue"><img style="width: 32px; height: 32px" src="{{asset('public/FontEnd/assets/images/notification(1).png')}}" />{{$value->TIEUDE}}</h5>
                                        <p class="card-text">* Ngày: {{ \Carbon\Carbon::parse($value->NGAYTHONGBAO)->format('d/m/Y') }}</p>
                                        <div class="card-text">{!! $value->NOIDUNG !!}</div>
                                        <a href="public/Uploads/Notifiacation/{{$value->TEPDINHKEM}}">{{$value->TEPDINHKEM}}</a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
