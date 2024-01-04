<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

session_start();
class LoginController extends Controller
{
    public function index(){
        return view("pages.login");
    }
    public function sigupSuccess(Request $request)
    {
        $taikhoan = $request->taikhoan;
        $matkhau = $request->matkhau;
        $results = DB::table("HOCVIEN")->where("EMAIL", $taikhoan)->where("MATKHAU",$matkhau)->first();
        $results1 = DB::table('GIAOVIEN')->where("EMAIL", $taikhoan)->where("MATKHAU",$matkhau)->first();
       if($results){
        Session::put("tenhocvien", $results->TENHOCVIEN);
        Session::put("useid", $results->MAHOCVIEN);
        return Redirect::to("/st_course");
       }
       else if ($results1){
        Session::put("tengiaovien", $results1->TENGIAOVIEN);
        Session::put("magiaovien", $results1->MAGIAOVIEN);
        Session::put("anhgiaovien", $results1->ANHDAIDIEN);
        return Redirect::to("/Teacher");
       }
       else{
        Session::put("message", 'Sai tài khoản hoặc mật khẩu. Vui lòng nhập lại.');
        return Redirect::to("/login");
       }
    }
    public function studentlogin(){
        return view("pages.student");
    }
    public function all_user_show(){
        $all_user = DB::table("HOCVIEN")->get();
        return view("pages.tabletest")->with('all_user', $all_user);
    }
    public function logout(){
        Session::put("tenhocvien", null);
        Session::put("useid", null);
        Session::put("tengiaovien", null);
        Session::put("magiaovien", null);
        Session::put("anhgiaovien", null);
        Return Redirect::to('/login');
    }
    
    
}
