<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

session_start();
class SigupController extends Controller
{
    public function index(){
        return view("pages.sigup");
    }
    public function save_account(Request $request){
        $matkhau2 = Request()->matkhau2;
        $data = array();
        $data['HOVATEN'] = request()->hovaten;
        $data['NGAYSINH'] = request()->ngaysinh;
        $data['EMAIL'] = request()->email;
        $data['SODIENTHOAI'] = request()->sodienthoai;
        $data['MATKHAU'] = request()->matkhau;
        $data['VAITRO'] = 'HOC VIEN';
        if($data['MATKHAU'] != $matkhau2){
            Session::put("thongbaokhongkhop", 'Mật khẩu không trùng khớp!');

            return Redirect::to("/sigup");
        }
        else{
            //DB::table("tbl_user1")->insert($data);
            //Session::put("thongbaothanhcong",1);
            DB::table("nguoidung")->insert($data);
            Session::put("thongbaothanhcong", 1);
            return Redirect::to("/sigup")->with('success', 'Đăng ký thành công!');
        }
       //return Redirect::to("/sigup");

    }
}
