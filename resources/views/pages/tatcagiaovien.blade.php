@extends('layoutteacher')
@section ('content_teacher')
<main class="content px-3 py-2">
    <div class="container-fluid">
        <div class="mb-3">
            <h4 style="color: white;">Trang chủ giáo viên</h4>
        </div>
        <div class="row">
            <div class="col-12 d-flex">
                <div class="card flex-fill border-0 illustration">
                    <div class="card-body p-0 d-flex flex-fill">
                        <div class="row g-0 w-100">
                            <div class="col-6">
                                <div class="p-3 m-1">
                                    <h4 style="color: white;">Chào mừng quay trở lại!</h4>
                                    <p class="mb-0">ZenLish</p>
                                </div>
                            </div>
                            <div class="col-6 align-self-end text-end">
                                <img src="image/customer-support.jpg" class="img-fluid illustration-img" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Table Element -->
        <div class="card border-0">
            <div class="card-header">
                <h5 class="card-title">
                    Danh sách giáo viên
                </h5>
                <h6 class="card-subtitle text-muted">
                    Tất cả các giáo viên trong ZenLish
                </h6>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Giáo viên:</th>
                            <th scope="col">Họ và tên</th>
                            <th scope="col">Quốc tịch</th>
                    
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($giaovien as $key=>$item)
                            <tr>
                                <th scope="row">{{$item->MAGIAOVIEN}}</th>
                                <td>{{$item->TENGIAOVIEN}}</td>
                                <td>{{$item->QUOCTICH}}</td>
                                
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
@endsection

