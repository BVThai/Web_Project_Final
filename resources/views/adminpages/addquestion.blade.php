@extends('layoutadmin')
@section ('admin_content')
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">

                <div class="row page-titles">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Form</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0)">CkEditor</a></li>
                    </ol>
                </div>

                <!-- row -->
                <form action="{{ route('ad_add_question')}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-xl-12 col-xxl-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Câu hỏi</h4>
                                </div>
                                <?php
                                $thongbaothanhcong = session("thongbaothanhcong");
                                if ($thongbaothanhcong) {
                                    echo '<span style = "color: red ; margin: 0 30px 5px 30px; " class ="fs-5">' . $thongbaothanhcong . '</span>';
                                    session(["thongbaothanhcong" => null]);
                                }
                                ?>
                                <textarea style="margin: 0 30px 5px 30px;" name="cauhoi" rows="4" cols="50" required></textarea>
                                <br>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xl-12 col-xxl-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Lựa chọn 1</h4>
                                </div>
                                <textarea style="margin: 0 30px 5px 30px;" name="luachon1" rows="4" cols="50" required></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12 col-xxl-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Lựa chọn 2</h4>
                                </div>
                                <textarea style="margin: 0 30px 5px 30px;" name="luachon2" rows="4" cols="50" required></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12 col-xxl-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Lựa chọn 3</h4>
                                </div>
                                <textarea style="margin: 0 30px 5px 30px;" name="luachon3" rows="4" cols="50" required></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12 col-xxl-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Lựa chọn 4</h4>
                                </div>
                                <textarea style="margin: 0 30px 5px 30px;" name="luachon4" rows="4" cols="50" required></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12 col-xxl-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Đáp án</h4>
                                </div>
                                <textarea style="margin: 0 30px 5px 30px;" name="dapan" rows="4" cols="50" required></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12 col-xxl-12">
                            <div class="card">
                                <button type="submit" class="btn btn-primary">Thêm</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->

@endsection