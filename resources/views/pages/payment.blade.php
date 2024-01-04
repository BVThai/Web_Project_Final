@extends('layoutstudent')
@section ('student_content')
<section class="container section-padding">
  <main>
    <div class="py-5 text-center">
      <h2 style="color:#4e57d4">Thanh toán</h2>
      <p class="lead">Hoàn thành đơn thanh toán sau để trải nghiệm đầy đủ khóa học của ZenLish</p>
    </div>

    <div class="row g-5">
      <div class="col-md-5 col-lg-4 order-md-last">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
          <span class="text-primary">Khóa học được chọn</span>
          <span class="badge bg-primary rounded-pill">1</span>
        </h4>
        <ul class="list-group mb-3">

          @foreach($thongtinkhoahoc as $key=>$thongtinkhoahoc)
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">{{($thongtinkhoahoc->TENKHOAHOC)}}</h6>
              <small class="text-muted">Brief description</small>
            </div>
            <span class="text-muted">{{($thongtinkhoahoc->GIAKHOAHOC)}} VND</span>
          </li>
          <input type="hidden" name="makhoahoc" id="makhoahoc" value="{{$thongtinkhoahoc->MAKHOAHOC}}">
          <input type="hidden" name="giakhoahoc" id="giakhoahoc" value="{{$thongtinkhoahoc->GIAKHOAHOC}}">
          <li class="list-group-item d-flex justify-content-between">
            <span>Tổng tiền (VND)</span>
            <strong>{{($thongtinkhoahoc->GIAKHOAHOC)}} VND</strong>
          </li>
          @endforeach
        </ul>

        
      </div>
      <div class="col-md-7 col-lg-8">
        @foreach($thongtinhocvien as $key=>$thongtinhocvien)
        <div class="row g-3">
          <div class="col-sm-12">
            <label for="firstName" class="form-label">Họ và tên</label>
            <input type="text" class="form-control" id="firstName" placeholder="" value="{{($thongtinhocvien->TENHOCVIEN)}}" required>
          </div>
          <div class="col-12">
            <label for="email" class="form-label">Email <span class="text-muted">(Tùy chọn)</span></label>
            <input type="text" class="form-control" id="email" placeholder="{{($thongtinhocvien->EMAIL)}}">
          </div>
          @if($thoigiankhoahoc)
            <div class="col-12">
              <label for="timesd" class="form-label">Thời gian khóa học bắt đầu</label>
              <ul>
              <li>Thời gian bắt đầu: {{ \Carbon\Carbon::parse($thoigiankhoahoc->THOIGIANBATDAU)->format('d/m/Y') }}</li> 
              <li>Thời gian kết thúc: {{ \Carbon\Carbon::parse($thoigiankhoahoc->THOIGIANKETTHUC)->format('d/m/Y') }}</li>
              <ul>
            </div>
          @endif
          <div class="col-12">
            <label for="Lịch học của lớp" class="form-label">Lịch học có sẵn</label>
            @foreach($thongtinlophoc as $key=>$thongtinlophoc)
              @if($thongtinlophoc->TINHTRANGLOPHOC != "Đã kết thúc")
              <div class="form-check">
                <input class="form-check-input lopHocRadio" type="radio" id="lopHoc-{{($thongtinlophoc->MALOPHOC)}}" name="lopHocIds" value="{{($thongtinlophoc->MALOPHOC)}}" data-class-id="{{($thongtinlophoc->MALOPHOC)}}">
                <label class="form-check-label" for="lopHoc-{{($thongtinlophoc->MALOPHOC)}}">{{($thongtinlophoc->TENLOPHOC)}}
                  <ul>
                    @foreach($thongtinlichhocData[$thongtinlophoc->MALOPHOC] as $key=>$schedule)
                      <li>{{($schedule->THU)}} - {{$schedule->GIOBATDAU}} - {{$schedule->GIOKETTHUC}}</li>
                    @endforeach
                  </ul>
                </label>
              </div>
              @endif
            @endforeach
          </div>

          <div class="col-12">
            <label for="phonenumber" class="form-label">Số điện thoại </label>
            <input type="phonenumber" class="form-control" id="sodienthoai" value="{{($thongtinhocvien->SODIENTHOAI)}}" placeholder="">
          </div>
          @endforeach
          <h4 class="pt-3 mt-3 mb-3 border-top">Phương thức thanh toán </h4>
          <div class="my-3">
            <div class="form-check">
              <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked required>
              <label class="form-check-label" for="credit">Thẻ ngân hàng</label>
            </div>
          </div>

          <div class="row gy-3">
            <div class="col-md-6">
              <label for="cc-number" class="form-label">Số thẻ</label>
              <input type="text" class="form-control" id="cc-number" placeholder="" required>
              <div class="invalid-feedback">
                Credit card number is required
              </div>
            </div>

            <div class="col-md-3">
              <label for="cc-expiration" class="form-label">Hạn sử dụng</label>
              <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
              <div class="invalid-feedback">
                Expiration date required
              </div>
            </div>

            <div class="col-md-3">
              <label for="cc-cvv" class="form-label">CVV</label>
              <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
              <div class="invalid-feedback">
                Security code required
              </div>
            </div>
          </div>

          <hr class="my-4">

          <a href="#" id="btnThanhToan" class="w-100 btn btn-primary btn-lg" onclick="submitPayment()">Thanh toán ngay!</a>
          <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            <script>
                function submitPayment() {
                    var selectedLopHocId = document.querySelector('input[name="lopHocIds"]:checked');

                    if (selectedLopHocId) {
                        var malophoc = selectedLopHocId.value;
                        var makhoahoc = document.getElementById('makhoahoc').value;
                        var gia = document.getElementById('giakhoahoc').value;

                        var redirectUrl = '{{URL::to("/ProccessPayment")}}/' + makhoahoc + '/' + malophoc + '/' + gia;
                        Swal.fire({
                          title: "Thanh toán!",
                          text: "Bạn đã thanh toán thành công!",
                          icon: "success"
                        });
                        window.location.href = redirectUrl;

                    } else {
                        alert("Vui lòng chọn lớp học bạn mong muốn!");
                    }
                }
            </script>
          
        </div>
      </div>
  </main>
</section>



@endsection
