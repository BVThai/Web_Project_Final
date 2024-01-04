@extends('layoutstudent')
@section ('student_content')
<style>
    #countdown {
        text-align: right;
        font-size: 40px;
        color: black;
        position: fixed;
        top: 100px;
        right: 100px;
        padding: 10px;
        background-color:whitesmoke;
        border-radius: 5px;
        z-index: 999; /* Đặt z-index cao để đảm bảo hiển thị trên tất cả các phần khác */
    }
</style>

    <div class="container" style="max-width: 800px; margin: 50px auto; background-color: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
        <p class="display-5" style="text-align: center;">Thi thử</p>
        <div id="countdown">10:00</div>
        <form action="{{ route('add_reply')}}" method="post">
            @csrf
            @foreach($all_question as $key => $allquestion)
            <div id="question-container" style="margin: 20px 0;">
                <p name='{{($allquestion->MACAUHOI)}}' id="question" style="font-size: 18px; margin-bottom: 10px;">Câu {{ $key + 1 }}: {{($allquestion->DE)}}</p>
                <ul id="choices" style="list-style-type: none; padding: 0;">
                    <input type="hidden" name="{{($allquestion->MACAUHOI)}}" value="0">
                    <li><label><input type="radio" name="{{($allquestion->MACAUHOI)}}" value="{{($allquestion->LUACHON1)}}"> {{($allquestion->LUACHON1)}}</label></li>
                    <li><label><input type="radio" name="{{($allquestion->MACAUHOI)}}" value="{{($allquestion->LUACHON2)}}"> {{($allquestion->LUACHON2)}}</label></li>
                    <li><label><input type="radio" name="{{($allquestion->MACAUHOI)}}" value="{{($allquestion->LUACHON3)}}"> {{($allquestion->LUACHON3)}}</label></li>
                    <li><label><input type="radio" name="{{($allquestion->MACAUHOI)}}" value="{{($allquestion->LUACHON4)}}"> {{($allquestion->LUACHON4)}}</label></li>
                </ul>
            </div>
            @endforeach
            <input type="hidden" id="custId" name="solanthi" value="{{$malanthi}}">
            <div style="text-align: right;">
                <button type="submit" class="btn btn-primary">Nộp bài</button>
            </div>
        </form>
    </div>

    <script>
    // Đặt thời gian đếm ngược ban đầu (tính bằng giây)
    var countdownTime = 600; // Ví dụ: 10 phút (10 * 60 giây)

    function updateCountdown() {
        var minutes = Math.floor(countdownTime / 60);
        var seconds = countdownTime % 60;

        // Hiển thị đồng hồ đếm ngược
        document.getElementById('countdown').innerHTML = minutes + ":" + (seconds < 10 ? '0' : '') + seconds;

        // Giảm thời gian đếm ngược
        countdownTime--;

        // Kiểm tra xem đã hết thời gian chưa
        if (countdownTime < 0) {
            // Nếu hết thời gian, tự động nộp form
            document.forms['quizForm'].submit();
        }
    }

    // Cập nhật đồng hồ mỗi giây
    var countdownInterval = setInterval(updateCountdown, 1000);
</script>
@endsection
