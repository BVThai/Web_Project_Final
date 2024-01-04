<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use League\CommonMark\Extension\Table\Table;

session_start();
class AdminController extends Controller
{
    public function Authlogin()
    {
        $id = Session::get('maquantrivien');
        if ($id) {
            return Redirect::to('/admin');
        } else {
            return Redirect::to('/adminlogin')->send();
        }
    }
    public function index()
    {
        $this->Authlogin();

        return view("adminpages.admin");
    }
    public function viewaddcustomer()
    {
        $this->Authlogin();
        return view("adminpages.addcustomer");
    }
    public function vieweditcustomer()
    {
        $this->Authlogin();

        return view("adminpages.updatecustomer");
    }
    //đăng nhập
    public function viewloginadmin()
    {
        return view('adminpages.loginadmin');
    }
    public function sigupSuccessadmin(Request $request)
    {
        $taikhoan = $request->taikhoan;
        $matkhau = $request->matkhau;
        $results = DB::table("QUANTRIVIEN")->where("TAIKHOAN", $taikhoan)->where("MATKHAU", $matkhau)->first();
        if ($results) {
            Session::put("username", $results->TAIKHOAN);
            Session::put("maquantrivien", $results->MAQUANTRIVIEN);
            return Redirect::to("/admin");
        } else {
            Session::put("message", 'Sai tài khoản hoặc mật khẩu. Vui lòng nhập lại.');
            return Redirect::to("/adminlogin");
        }
    }

    // học viên-----------------------------------------------------//------------------------------------
    public function viewallcustomer()
    {
        $this->Authlogin();

        $all_user = DB::table("HOCVIEN")->get();
        return view("adminpages.mangecustomer")->with('all_user', $all_user);
    }
    public function addcustomer(Request $request)
    {

        $data = array();
        $data['TENHOCVIEN'] = request()->hovaten;
        $data['NGAYSINH'] = request()->ngaysinh;
        $data['EMAIL'] = request()->email;
        $data['SODIENTHOAI'] = request()->sodienthoai;
        $data['MATKHAU'] = request()->matkhau;
        $data['TINHTRANG'] = 'Đang sử dụng';
        DB::table("HOCVIEN")->insert($data);
        Session::put("thongbaothanhcong", "Bạn đã thêm thông tin tài khoản thành công");
        return Redirect::to("/viewaddcustomer")->with('success', 'Đăng ký thành công!');
    }
    public function deletecustomer($manguoidung)
    {
        $this->Authlogin();
        DB::table('HOCVIEN')->where('MAHOCVIEN', $manguoidung)->delete();
        return Redirect::to('/viewallcustomer');
    }
    public function updatecustomer($manguoidung)
    {
        $this->Authlogin();

        $updatecustomer = DB::table('HOCVIEN')->where('MAHOCVIEN', $manguoidung)->get();
        return view('adminpages.updatecustomer')->with('updatecustomer', $updatecustomer);
    }
    public function processupdate(Request $request, $manguoidung)
    {
        $this->Authlogin();

        $data = array();
        $data['TENHOCVIEN'] = request()->hovaten;
        $data['NGAYSINH'] = request()->ngaysinh;
        $data['EMAIL'] = request()->email;
        $data['SODIENTHOAI'] = request()->sodienthoai;
        $data['MATKHAU'] = request()->matkhau;
        $data['TINHTRANG'] = request()->vaitro;
        DB::table('HOCVIEN')->where('MAHOCVIEN', $manguoidung)->update($data);
        Session::put("thongbaothaydoi", "Bạn đã sửa thông tin thành công");
        return Redirect::to('/viewallcustomer');
    }


    // giáo viên-----------------------------------------------------//------------------------------------
    public function viewaddteacher()
    {
        $this->Authlogin();

        return view('adminpages.addteacher');
    }
    public function addteacher(Request $request)
    {
        $this->Authlogin();

        $data = array();
        $data['TENGIAOVIEN'] = request()->hovatengiaovien;
        $data['DIACHI'] = request()->diachi;
        $data['NGAYSINH'] = request()->ngaysinh;
        $data['EMAIL'] = request()->email;
        $data['SODIENTHOAI'] = request()->sodienthoai;
        $data['QUOCTICH'] = request()->quocgia;
        $get_image = request()->file('anhdaidien');
        if ($get_image) {
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image));
            $new_image = $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();
            $get_image->move('public\Uploads\Teacher', $new_image);
            $data['ANHDAIDIEN'] = $new_image;
            $data['MATKHAU'] = request()->matkhau;
            $data['TINHTRANG'] = 'Đang hoạt động';
            DB::table("GIAOVIEN")->insert($data);
            Session::put("thongbaothanhcong", "Bạn đã thêm thông tin tài khoản thành công");
            return Redirect::to("/viewaddcustomer")->with('success', 'Đăng ký thành công!');
        }
        $data['ANHDAIDIEN'] = '';
        $data['MATKHAU'] = request()->matkhau;
        $data['TINHTRANG'] = 'Đang hoạt động';
        DB::table("GIAOVIEN")->insert($data);
        Session::put("thongbaothanhcong", "Bạn đã thêm thông tin tài khoản thành công");
        return Redirect::to("/viewaddteacher")->with('success', 'Đăng ký thành công!');
    }
    public function viewallteacher()
    {
        $this->Authlogin();

        $all_teacher = DB::table("GIAOVIEN")->get();
        return view("adminpages.manageteacher")->with('all_teacher', $all_teacher);
    }
    public function updateteacher($magiaovien)
    {
        $this->Authlogin();

        $updateteacher = DB::table('GIAOVIEN')->where('MAGIAOVIEN', $magiaovien)->get();
        return view('adminpages.updateteacher')->with('updateteacher', $updateteacher);
    }
    public function processupdateteacher(Request $request, $magiaovien)
    {
        $this->Authlogin();

        $data = array();
        $data['TENGIAOVIEN'] = request()->hovatengiaovien;
        $data['DIACHI'] = request()->diachi;
        $data['NGAYSINH'] = request()->ngaysinh;
        $data['EMAIL'] = request()->email;
        $data['SODIENTHOAI'] = request()->sodienthoai;
        $data['QUOCTICH'] = request()->quocgia;
        $get_image = request()->file('anhdaidien');
        if ($get_image) {
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image));
            $new_image = $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();
            $get_image->move('public\Uploads\Teacher', $new_image);
            $data['ANHDAIDIEN'] = $new_image;
            $data['MATKHAU'] = request()->matkhau;
            $data['TINHTRANG'] = 'Đang hoạt động';
            DB::table("GIAOVIEN")->where('MAGIAOVIEN', $magiaovien)->update($data);
            Session::put("thongbaothaydoi", "Bạn đã sửa thông tin tài khoản thành công");
            return Redirect::to("/viewallteacher");
        }
        $data['MATKHAU'] = request()->matkhau;
        $data['TINHTRANG'] = request()->vaitro;
        DB::table('GIAOVIEN')->where('MAGIAOVIEN', $magiaovien)->update($data);
        Session::put("thongbaothaydoi", "Bạn đã sửa thông tin thành công");
        return Redirect::to('/viewallteacher');
    }
    public function deleteteacher($magiaovien)
    {
        $this->Authlogin();

        DB::table('GIAOVIEN')->where('MAGIAOVIEN', $magiaovien)->delete();
        return Redirect::to('/viewallteacher');
    }
    // khoa học
    public function viewaddcourse()
    {
        $this->Authlogin();

        return view("adminpages.addcourse");
    }
    public function addcourse(Request $request)
    {
        $this->Authlogin();

        $data = array();
        $data['TENKHOAHOC'] = request()->tenkhoahoc;
        $data['MOTA'] = request()->mota;
        $data['GIAKHOAHOC'] = request()->gia;
        $data['THOILUONG'] = request()->thoiluong;
        $data['TRANGTHAI'] = request()->trangthai;
        $data['LOAIKHOAHOC'] = request()->loaikhoahoc;
        $get_image = request()->file('anhkhoahoc');
        if ($get_image) {
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image));
            $new_image = $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();
            $get_image->move('public\Uploads\Course', $new_image);
            $data['ANHKHOAHOC'] = $new_image;
            DB::table("KHOAHOC")->insert($data);
            Session::put("thongbaothanhcong", "Bạn đã thêm thông tin tài khoản thành công");
            return Redirect::to("/viewaddcourse")->with('success', 'Đăng ký thành công!');
        }
        $data['ANHKHOAHOC'] = '';
        DB::table('KHOAHOC')->insert($data);
        Session::put("thongbaothanhcong", "Bạn đã thêm thông tin tài khoản thành công");
        return Redirect::to("/viewaddcourse");
    }
    public function viewallcourse()
    {
        $this->Authlogin();

        $all_course = DB::table("KHOAHOC")->get();
        return view("adminpages.managecourse")->with('all_course', $all_course);
    }
    public function updatecourse($makhoahoc)
    {
        $this->Authlogin();

        $updatecourse = DB::table('KHOAHOC')->where('MAKHOAHOC', $makhoahoc)->get();
        return view('adminpages.updatecourse')->with('updatecourse', $updatecourse);
    }
    public function processupdatecourse(Request $request, $makhoahoc)
    {
        $this->Authlogin();

        $data = array();
        $data['TENKHOAHOC'] = request()->tenkhoahoc;
        $data['GIAKHOAHOC'] = request()->gia;
        $data['MOTA'] = request()->mota;
        $data['THOILUONG'] = request()->thoiluong;
        $data['TRANGTHAI'] = request()->trangthai;
        $data['LOAIKHOAHOC'] = request()->loaikhoahoc;
        $get_image = request()->file('anhkhoahoc');
        if ($get_image) {
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image));
            $new_image = $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();
            $get_image->move('public\Uploads\Course', $new_image);
            $data['ANHKHOAHOC'] = $new_image;
            DB::table('KHOAHOC')->where('MAKHOAHOC', $makhoahoc)->update($data);
            Session::put("thongbaothanhcong", "Bạn đã thêm thông tin tài khoản thành công");
            return Redirect::to("/viewaddcourse")->with('success', 'Đăng ký thành công!');
        }
        DB::table('KHOAHOC')->where('MAKHOAHOC', $makhoahoc)->update($data);
        Session::put("thongbaothaydoi", "Bạn đã sửa thông tin thành công");
        return Redirect::to('/viewallcourse');
    }
    public function deletecourse($makhoahoc)
    {
        $this->Authlogin();

        DB::table('KHOAHOC')->where('MAKHOAHOC', $makhoahoc)->delete();
        return Redirect::to('/viewallcourse');
    }
    public function viewaddclass()
    {
        $this->Authlogin();

        $all_teacher = DB::table('GIAOVIEN')->orderBy('TENGIAOVIEN')->get();
        $all_course = DB::table('KHOAHOC')->orderBy('TENKHOAHOC')->get();
        return view("adminpages.addclass")->with('all_teacher', $all_teacher)->with('all_course', $all_course);
    }
    public function selectteacher($magiaovien)
    {
        $this->Authlogin();

        $name_teacher = DB::table('GIAOVIEN')->where('MAGIAOVIEN', $magiaovien)->get();
        return view('adminpages.addclass')->with('name_teacher', $name_teacher);
    }
    public function addclass(Request $request)
    {
        $this->Authlogin();

        $data = array();
        $data['TENLOPHOC'] = request()->tenlophoc;
        $data['THOIGIANBATDAU'] = request()->thoigianbatdau;
        $data['THOIGIANKETTHUC'] = request()->thoigianketthuc;
        $data['MAGIAOVIEN'] = request()->giaovienphutrach;
        $data['MAKHOAHOC'] = request()->tenkhoahoc;
        $data['TINHTRANGLOPHOC'] = 'Chưa bắt đầu';
        DB::table('LOPHOC')->insert($data);
        Session::put("thongbaothanhcong", "Bạn đã thêm thông tin tài khoản thành công");
        return Redirect::to("/viewaddclass");
    }
    public function viewallclass()
    {
        $this->Authlogin();

        $all_class = DB::table("LOPHOC")->join('GIAOVIEN', 'GIAOVIEN.MAGIAOVIEN', '=', 'LOPHOC.MAGIAOVIEN')->join('KHOAHOC', 'KHOAHOC.MAKHOAHOC', '=', 'LOPHOC.MAKHOAHOC')->get();
        return view("adminpages.manageclass")->with('all_class', $all_class);
    }
    public function updateclass($malophoc)
    {
        $this->Authlogin();

        $updateclass = DB::table('LOPHOC')->where('MALOPHOC', $malophoc)->get();
        $getteacher = DB::table('GIAOVIEN')->orderBy('TENGIAOVIEN')->get();
        $getcourse = DB::table('KHOAHOC')->orderBy('TENKHOAHOC')->get();
        return view('adminpages.updateclass')->with('updateclass', $updateclass)->with('getteacher', $getteacher)->with('getcourse', $getcourse);
    }
    public function processupdateclass(Request $request, $malophoc)
    {
        $this->Authlogin();

        $data = array();
        $data['TENLOPHOC'] = request()->tenlophoc;
        $data['THOIGIANBATDAU'] = request()->thoigianbatdau;
        $data['THOIGIANKETTHUC'] = request()->thoigianketthuc;
        $data['MAGIAOVIEN'] = request()->giaovienphutrach;
        $data['MAKHOAHOC'] = request()->tenkhoahoc;
        DB::table('LOPHOC')->where('MALOPHOC', $malophoc)->update($data);
        Session::put("thongbaothaydoi", "Bạn đã sửa thông tin thành công");
        return Redirect::to('/viewallclass');
    }
    public function deleteclass($malophoc)
    {
        $this->Authlogin();

        DB::table('LOPHOC')->where('MALOPHOC', $malophoc)->delete();
        return Redirect::to('/viewallclass');
    }


    // calendar 

    public function viewaddclasscal()
    {
        $this->Authlogin();

        $all_class = DB::table('LOPHOC')->orderBy('TENLOPHOC')->get();
        $all_course = DB::table('KHOAHOC')->orderBy('TENKHOAHOC')->get();
        return view("adminpages.addclasscalendar")->with('all_course', $all_course)->with('all_class', $all_class);
    }
    public function addclasscal(Request $request)
    {
        $this->Authlogin();

        $data = array();
        $data['MAKHOAHOC'] = request()->khoahoc;
        $data['MALOPHOC'] = request()->lophoc;
        $data['THU'] = request()->thu;
        $data['GIOBATDAU'] = request()->thoigianbatdau;
        $data['GIOKETTHUC'] = request()->thoigianketthuc;
        DB::table('LICHHOCCUALOP')->insert($data);
        Session::put("thongbaothanhcong", "Bạn đã thêm thông tin tài khoản thành công");
        return Redirect::to("/viewaddclasscal");
    }


    public function viewallclasscal()
    {
        $this->Authlogin();

        $all_classcal = DB::table("LICHHOCCUALOP")->join('KHOAHOC', 'KHOAHOC.MAKHOAHOC', '=', 'LICHHOCCUALOP.MAKHOAHOC')->join('LOPHOC', 'LOPHOC.MALOPHOC', '=', 'LICHHOCCUALOP.MALOPHOC')->get();
        return view("adminpages.manageclasscal")->with('all_classcal', $all_classcal);
    }
    public function updateclasscal($malichhoc)
    {
        $this->Authlogin();

        $updatecal = DB::table('lichhoccualop')->WHERE('MALICHHOC', $malichhoc)->get();
        $getclass = DB::table('LOPHOC')->orderBy('TENLOPHOC')->get();
        $getcourse = DB::table('KHOAHOC')->orderBy('TENKHOAHOC')->get();
        return view("adminpages.updateclasscal")->with('getclass', $getclass)->with('updatecal', $updatecal)->with('getcourse', $getcourse);
    }
    public function processupdateclasscal(Request $request, $malichhoc)
    {
        $this->Authlogin();

        $data = array();
        $data['MAKHOAHOC'] = request()->khoahoc;
        $data['MALOPHOC'] = request()->lophoc;
        $data['THU'] = request()->thu;
        $data['GIOBATDAU'] = request()->thoigianbatdau;
        $data['GIOKETTHUC'] = request()->thoigianketthuc;
        DB::table('LICHHOCCUALOP')->where('MALICHHOC', $malichhoc)->update($data);
        Session::put("thongbaothaydoi", "Bạn đã sửa thông tin thành công");
        return Redirect::to('/viewallclasscal');
    }
    public function deleteclasscal($malichhoc)
    {
        $this->Authlogin();

        DB::table('lichhoccualop')->where('MALICHHOC', $malichhoc)->delete();
        return Redirect::to('/viewallclasscal');
    }
    //HOC VIEN CUA LOP
    public function viewaddstclass()
    {
        $this->Authlogin();

        $all_class = DB::table('LOPHOC')->orderBy('TENLOPHOC')->get();
        $all_course = DB::table('KHOAHOC')->orderBy('TENKHOAHOC')->get();
        $all_stu = DB::table('HOCVIEN')->orderBy('TENHOCVIEn')->get();
        return view("adminpages.addstuclass")->with('all_class', $all_class)->with('all_course', $all_course)->with('all_stu', $all_stu);
    }
    public function addstclass(Request $request)
    {
        $this->Authlogin();

        $data = array();
        $data['MAHOCVIEN'] = request()->hocvien;
        $data['MALOPHOC'] = request()->lophoc;
        $data['MAKHOAHOC'] = request()->khoahoc;
        DB::table('hocvienthoclophoc')->insert($data);
        Session::put("thongbaothanhcong", "Bạn đã thêm thông tin tài khoản thành công");
        return Redirect::to("/viewaddstclass");
    }


    public function viewallstclass()
    {
        $this->Authlogin();

        $all_stclass = DB::table("hocvienthoclophoc")
            ->join('KHOAHOC as kh', 'kh.MAKHOAHOC', '=', 'hocvienthoclophoc.MAKHOAHOC')
            ->join('LOPHOC as lh', 'lh.MALOPHOC', '=', 'hocvienthoclophoc.MALOPHOC')
            ->join('HOCVIEN as hv', 'hv.MAHOCVIEN', '=', 'hocvienthoclophoc.MAHOCVIEN')
            ->select('kh.MAKHOAHOC', 'lh.MALOPHOC', 'hv.MAHOCVIEN', 'kh.TENKHOAHOC', 'lh.TENLOPHOC', 'hv.TENHOCVIEN')
            ->get();

        return view("adminpages.managestclass")->with('all_stclass', $all_stclass);
    }
    public function updatestclass($mahocvien, $makhoahoc, $malophoc)
    {
        $this->Authlogin();

        $updatecalst = DB::table('hocvienthoclophoc')->WHERE('MAHOCVIEN', $mahocvien)->WHERE('MAKHOAHOC', $makhoahoc)->WHERE('MALOPHOC', $malophoc)->get();
        $getstudent = DB::table('HOCVIEN')->orderBy('TENHOCVIEN')->get();
        $getclass = DB::table('LOPHOC')->orderBy('TENLOPHOC')->get();
        $getcourse = DB::table('KHOAHOC')->orderBy('TENKHOAHOC')->get();
        return view("adminpages.updatestclass")->with('getclass', $getclass)->with('updatecalst', $updatecalst)->with('getcourse', $getcourse)->with('getst', $getstudent);
    }
    public function processupdatestclass(Request $request, $mahocvien, $makhoahoc, $malophoc)
    {
        $this->Authlogin();

        $data = array();
        $data['MAHOCVIEN'] = request()->hocvien;
        $data['MAKHOAHOC'] = request()->khoahoc;
        $data['MALOPHOC'] = request()->lophoc;
        DB::table('hocvienthoclophoc')->where('MAHOCVIEN', $mahocvien)->where('MAKHOAHOC', $makhoahoc)->where('MALOPHOC', $malophoc)->update($data);
        Session::put("thongbaothaydoi", "Bạn đã sửa thông tin thành công");
        return Redirect::to('/viewallstclass');
    }
    public function deletestclass($mahocvien, $makhoahoc, $malophoc)
    {
        $this->Authlogin();

        DB::table('hocvienthoclophoc')->where('MAHOCVIEN', $mahocvien)->where('MAKHOAHOC', $makhoahoc)->where('MALOPHOC', $malophoc)->delete();
        return Redirect::to('/viewallstclass');
    }
    public function getclassname(Request $request)
    {
        $makhoahoc = $request->makhoahoc;
        $data = DB::table('LOPHOC')->where('MAKHOAHOC', $makhoahoc)->get();
        foreach ($data as $item) {
            echo '<option value="' . $item->MALOPHOC . '">' . $item->TENLOPHOC . '</option>';
        }
    }
    public function viewaddquestion()
    {
        return view("adminpages.addquestion");
    }
    public function addquestion(Request $request)
    {
        $this->Authlogin();

        $data = array();
        $data['DE'] = request()->cauhoi;
        $data['LUACHON1'] = request()->luachon1;
        $data['LUACHON2'] = request()->luachon2;
        $data['LUACHON3'] = request()->luachon3;
        $data['LUACHON4'] = request()->luachon4;
        $data['DAPAN'] = request()->dapan;
        DB::table('cauhoithithu')->insert($data);
        Session::put("thongbaothanhcong", "Bạn đã thêm câu hỏi thành công");
        return Redirect::to("/viewaddquestion");
    }
}
