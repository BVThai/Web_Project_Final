@extends('layoutteacher')
@section ('content_teacher')
<style>
    /* Tăng chiều cao cho CKEditor */
    .ck-editor__editable {
        min-height: 200px; /* Đặt chiều cao tối thiểu */
    }

    /* Tùy chỉnh chiều cao theo ý muốn */
    #editorNoidungthong,
    #editorTieude {
        min-height: 300px;
    }

</style>

<div class="container py-3">
    <div class="row">
        <div class="col-12">
            <div class="bg-light rounded p-2">
                <ul class="nav nav-tabs">
                    <li class="nav-item ">
                        <a class="nav-link active" data-bs-toggle="tab" href="#all">Đang dạy</a>
                    </li>
                </ul>
                <div class="row">
                    <div class="col-12 py-2" style="margin-top: 35px;">
                        <div class="section-title">
                            <h1 class="display-6 fw-semibold text-center"> Thông tin chi tiết </h1>
                        </div>                       
                    </div>
                    <div class="container ps-5">
                        <div class="row">
                            <div class="col-md-12">
                                <form method="post" action="{{URL :: to('/Themthongbao')}}" enctype="multipart/form-data">
                                    @csrf
                                    <div  class="text-danger"></div>
                                    <div class="form-group">
                                        <label  class="control-label">Tiêu đề</label>
                                        <input name="Tieude" class="form-control"style="background-color: white;" />
                                        
                                    </div>
                                    <div class="form-group">
                                        <label  class="control-label">Nội dung</label>
                                        <textarea name="Noidung" class="form-control" id="editorNoidungthong"></textarea>
                                       
                                    </div>
                                    <div class="form-group">
                                        <label asp-for="Tendinhkem" class="control-label">File đính kèm(nếu có)</label>
                                        <input type="file" name="Tendinhkem" class="form-control" style="background-color: white;" />
                                    </div>
                                    <div class="form-group">
                                        <input style="float: right; margin-top: 40px; border-radius: 5px;" type="submit" value="Thêm thông báo" class="btn btn-primary" />
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div>
    <a asp-action="Index">Back to List</a>
</div>

<!-- Script để kích hoạt CKEditor cho các trường -->
<script>
    ClassicEditor
        .create(document.querySelector('#editorNoidungthong'))
        .catch(error => {
            console.error(error);
        });

    ClassicEditor
        .create(document.querySelector('#editorTieude'))
        .catch(error => {
            console.error(error);
        });
</script>
@endsection
