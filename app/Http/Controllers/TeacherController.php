<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use League\CommonMark\Extension\Table\Table;

session_start();
class TeacherController extends Controller
{
    public function tatcagiaovien(){
        $giaovien = DB::table('GIAOVIEN')->get();
        return view('pages.tatcagiaovien')->with('giaovien', $giaovien);
    }
    public function khoahocdangday(){
        $malophoc = Session::get('magiaovien');
        $khoahocdangday = DB::table('LOPHOC')
                        ->join('KHOAHOC', 'KHOAHOC.MAKHOAHOC', '=' ,'LOPHOC.MALOPHOC')
                        ->where('MAGIAOVIEN', $malophoc)
                        ->where('TINHTRANGLOPHOC', 'Đang hoạt động')
                        ->get();
        return view('pages.lophocdangday')->with('lophocdangday', $khoahocdangday);
    }   
    public function thongtinchiitetlop($malophoc){
        $chitietlop = DB::table('LOPHOC')
                        ->join('KHOAHOC', 'KHOAHOC.MAKHOAHOC', '=' ,'LOPHOC.MALOPHOC')
                        ->where('LOPHOC.MALOPHOC', $malophoc) 
                        ->get();
        $lichlophoc = DB::table('LICHHOCCUALOP')->where('MALOPHOC' , $malophoc)->get();
        Session::put("malophoc", $malophoc);
        return view('pages.chitietlop')->with('chitietlop', $chitietlop)->with('lichhoc', $lichlophoc);
    }
    public function tatcahocvien($malophoc){
        $hocvien = DB::table('hocvienthoclophoc')
                    ->join('HOCVIEN', 'HOCVIEN.MAHOCVIEN' ,'=', 'hocvienthoclophoc.MAHOCVIEN')
                    ->where('MALOPHOC', $malophoc)->get();
        return view('pages.Danhsachhocvien')->with('danhsachhocvien', $hocvien);      
    }
    public function formthemthongbao(){
        return view('pages.themthongbaolophoc');
    }
    public function themthongbao(Request $request){
        $malophoc = Session::get("malophoc");
        $data = array();
        $data['TIEUDE'] = request()->Tieude;
        $data['NOIDUNG'] = request()->Noidung;
        $data['NGAYTHONGBAO'] = now()->format("Y-m-d");
        $data['MALOPHOC'] = $malophoc;
        $get_file = request()->file('Tendinhkem');
        if ($get_file) {
            $get_name_file = $get_file->getClientOriginalName();
            $name_file = current(explode('.', $get_name_file));
            $new_file = $name_file . rand(0, 99) . '.' . $get_file->getClientOriginalExtension();
            $get_file->move('public\Uploads\Notifiacation', $new_file);
            $data['TEPDINHKEM'] = $new_file;
            DB::table("THONGTINLOPHOC")->insert($data);
            Session::put("themthongbaothanhcong", "Bạn đã thêm thông báo cho lớp học thành công");
            return Redirect::to("/Danhsachthongbao");
        }
        $data['TEPDINHKEM'] = '';
        DB::table("THONGTINLOPHOC")->insert($data);
        Session::put("themthongbaothanhcong", "Bạn đã thêm thông báo cho lớp học thành công");
        return Redirect::to("/Danhsachthongbao");
    }
    public function danhsachthongbao(){
        $malophoc = Session::get('malophoc');
        $thongbao = DB::table('thongtinlophoc')->where('MALOPHOC', $malophoc)->orderByDesc('MATHONGTIN')->get();
        return view('pages.dsthongbao')->with('thongbao', $thongbao);
    }
    public function xoathongbao($mathongtin)
    {
        DB::table('thongtinlophoc')->where('MATHONGTIN', $mathongtin)->delete();
        return Redirect::to('/Danhsachthongbao');
    }
    public function lichdaygiaovien(){
        $magiaovien = Session::get('magiaovien');
        $thongtinlop = DB::table('LOPHOC')
                        ->join('KHOAHOC', 'KHOAHOC.MAKHOAHOC', '=', 'LOPHOC.MAKHOAHOC')
                        ->where('MAGIAOVIEN', $magiaovien)->get();
        $thongtinlichhocData = [];    
        foreach($thongtinlop as $key=>$thongtinlophoc){
            $scheduleData = DB::table('LICHHOCCUALOP')->where('MALOPHOC', $thongtinlophoc->MALOPHOC)->get();
            $thongtinlichhocData[$thongtinlophoc->MALOPHOC] = $scheduleData;
        }
        return view('pages.lichdaycuagiaovien')->with('thongtinlop', $thongtinlop)->with('thongtinlichhocData', $thongtinlichhocData);
       }
}
