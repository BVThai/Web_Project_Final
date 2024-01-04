<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table>
  <tr>
    <th>Mã người dùng </th>
    <th>Họ tên</th>
    <th>Ngày sinh</th>
    <th>Email</th>
    <th>Số điện thoại</th>
  </tr>
  @foreach($all_user as $key => $userall)
  <tr>
    <td>{{($userall->MAHOCVIEN)}}</td>
    <td>{{($userall->TENHOCVIEN)}}</td>
    <td>{{($userall->NGAYSINH)}}</td>
    <td>{{($userall->EMAIL)}}</td>
    <td>{{($userall->SODIENTHOAI)}}</td>
  </tr>
  @endforeach
</table>
</body>
</html>