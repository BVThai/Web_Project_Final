@extends('layoutstudent')
@section ('student_content')
<div class="container py-5">
    <div class="row">
        <div class="col-12 py-3">
            <div class="section-title">
                <h1 class="display-4 fw-semibold text-center"
                    style="color:#4e57d4; padding-top: 100px;">
                    Đáp án chi tiết
                </h1>
                <div class="line"></div>
            </div>
           
        </div>
        @foreach($ttlanthi as $key=>$ttlanthi)
            <div class="col-12 ">
                <div class="bg-white rounded p-2">
                    <ul class="nav nav-tabs">
                        <li class="nav-item ">
                            <a class="nav-link active" data-bs-toggle="tab" href="#all">Ngày thi: {{$ttlanthi->NGAYTHI}}</a>

                        </li>
                    </ul>
                    <div class="row">
                        <div class="col-12">
                            <div class="tab-content p-4 ">
                                <div id="all" class="tab-pane fade in active show">
                                    <div class="row table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr class="table-warning">
                                                    <th >Question</th>
                                                    <th >Your Answer</th>
                                                    <th >Correct Answer</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($tttcautl as $key=>$value)
                                                    <tr class="{{ $value->CAUTRALOI == $value->DAPAN ? 'table-success' : 'table-danger'}}">
                                                        <td>{{$value->DE}}</td>
                                                        <td>{{$value->CAUTRALOI == 0 ? '' : $value->CAUTRALOI}}</td>
                                                        <td>{{$value->DAPAN}}</td>
                                                    
                                                        
                                                    </tr>
                                                @endforeach
                                                
                                                <tr class="table-info">
                                                    <td colspan="2" style="font-weight: bold; font-size: 20px;">Total score</td>
                                                    <td style="font-weight: bold; font-size: 20px;">{{$ttlanthi->SOCAUDUNG * 10}}</td>
                                                    
                                                </tr>
                                            </tbody>
                                        </table> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
