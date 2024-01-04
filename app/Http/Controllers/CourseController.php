<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Queue\Failed\PrunableFailedJobProvider;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use League\CommonMark\Extension\Table\Table;

session_start();
class CourseController extends Controller
{
    public function viewtoeic(){
        return view('pages.toiec');
    }
    public function khoahocdamua(){
        $mahocvien = Session::get('useid');
        $lophocdanghoc = DB::table('hocvienthoclophoc')
                        ->join('LOPHOC', 'LOPHOC.MALOPHOC', '=', 'HOCVIENTHOCLOPHOC.MALOPHOC')
                        ->join('KHOAHOC', 'KHOAHOC.MAKHOAHOC', '=', 'HOCVIENTHOCLOPHOC.MAKHOAHOC')
                        ->where('TINHTRANGLOPHOC', 'Đang hoạt động')
                        ->where('MAHOCVIEN', $mahocvien)
                        ->get();
        $lophocketthuc = DB::table('hocvienthoclophoc')
                        ->join('LOPHOC', 'LOPHOC.MALOPHOC', '=', 'HOCVIENTHOCLOPHOC.MALOPHOC')
                        ->join('KHOAHOC', 'KHOAHOC.MAKHOAHOC', '=', 'HOCVIENTHOCLOPHOC.MAKHOAHOC')
                        ->where('TINHTRANGLOPHOC', 'Đã kết thúc')
                        ->where('MAHOCVIEN', $mahocvien)
                        ->get();
        return view('pages.khoahocdamua')->with('lophocdanghoc', $lophocdanghoc)->with('lophocketthuc', $lophocketthuc);
    }
   public function lichhoc(){
    $mahocvien = Session::get('useid');
    $thongtinlop = DB::table('HOCVIENTHOCLOPHOC')
                    ->join('KHOAHOC', 'KHOAHOC.MAKHOAHOC', '=', 'HOCVIENTHOCLOPHOC.MAKHOAHOC')
                    ->join('LOPHOC', 'LOPHOC.MALOPHOC', '=', 'HOCVIENTHOCLOPHOC.MALOPHOC')
                    ->where('MAHOCVIEN', $mahocvien)->get();
    $thongtinlichhocData = [];    
    foreach($thongtinlop as $key=>$thongtinlophoc){
        $scheduleData = DB::table('LICHHOCCUALOP')->where('MALOPHOC', $thongtinlophoc->MALOPHOC)->get();
        $thongtinlichhocData[$thongtinlophoc->MALOPHOC] = $scheduleData;
    }
    return view('pages.thongtinlichhoc')->with('thongtinlop', $thongtinlop)->with('thongtinlichhocData', $thongtinlichhocData);
   }
   public function dstbhv($malophoc){
    $dstt = DB::table('THONGTINLOPHOC')->where('MALOPHOC', $malophoc)->orderByDesc('MATHONGTIN')->get();
    return view('pages.thongbaolopst')->with('dstt',$dstt);
   }
}
