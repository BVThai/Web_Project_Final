<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

use Illuminate\Support\Facades\Session;

session_start();
class PaymentController extends Controller
{
    public function PaymentMethod($makhoahoc)
    {
        $mahocvien = Session::get('useid');
        $thongtinhocvien = DB::table("HOCVIEN")->where("MAHOCVIEN", $mahocvien)->get();
        $lopChuaDangKy = DB::table('LOPHOC')
            ->where("MAKHOAHOC", $makhoahoc)
            ->whereNotExists(function ($query) use ($mahocvien) {
                $query->select(DB::raw(1))
                    ->from('hocvienthoclophoc')
                    ->whereRaw('hocvienthoclophoc.MALOPHOC = LOPHOC.MALOPHOC')
                    ->where('MAHOCVIEN', $mahocvien);
            })
            ->get();
        $thongtinlophoc1 = DB::table('LOPHOC')->where("MAKHOAHOC", $makhoahoc)->get();

        // Create an associative array to store schedule data for each class
        $thongtinlichhocData = [];


        foreach ($lopChuaDangKy as $lop) {
            $scheduleData = DB::table('LICHHOCCUALOP')->where('MALOPHOC', $lop->MALOPHOC)->get();
            $thongtinlichhocData[$lop->MALOPHOC] = $scheduleData;
        }

        $thongtinkhoahoc = DB::table('KHOAHOC')->where('MAKHOAHOC', $makhoahoc)->get();
        $thoigiankhoahoc = DB::table('LOPHOC')->where("MAKHOAHOC", $makhoahoc)->first();

        return View('pages.payment')->with('thongtinhocvien', $thongtinhocvien)->with('thongtinlophoc', $lopChuaDangKy)->with('thongtinkhoahoc', $thongtinkhoahoc)->with('thongtinlichhocData', $thongtinlichhocData)->with('thoigiankhoahoc', $thoigiankhoahoc);
    }
    public function ProccessPayment($makhoahoc, $malophoc, $giakhoahoc)
    {
        $mahocvien = Session::get('useid');
        $exists = DB::table('hocvienthoclophoc')
            ->where('MAHOCVIEN', $mahocvien)
            ->where('MAKHOAHOC', $makhoahoc)
            ->where('MALOPHOC', $malophoc)
            ->exists();
        if ($exists == null) {
            $data = array();
            $data['MAHOCVIEN'] = $mahocvien;
            $data['MAKHOAHOC'] = $makhoahoc;
            $data['MALOPHOC'] = $malophoc;
            $data['GIATIEN'] = $giakhoahoc;
            $data['NGAYTHANHTOAN'] = now()->format("Y-m-d");
            DB::table('THANHTOAN')->insert($data);
            $data1 = array();
            $data1['MAHOCVIEN'] = $mahocvien;
            $data1['MAKHOAHOC'] = $makhoahoc;
            $data1['MALOPHOC'] = $malophoc;
            DB::table('hocvienthoclophoc')->insert($data1);
            DB::table('LOPHOC')->where('MALOPHOC', $malophoc)->increment('SOLUONGHIENTAI');
            return redirect("/PaymentMethod/{$makhoahoc}");
        }
    }
    public function GetAllPayment()
    {
        $allpayment = DB::table('THANHTOAN')->join('HOCVIEN', 'HOCVIEN.MAHOCVIEN', '=', 'THANHTOAN.MAHOCVIEN')
            ->join('LOPHOC', 'LOPHOC.MALOPHOC', '=', 'THANHTOAN.MALOPHOC')
            ->join('KHOAHOC', 'KHOAHOC.MAKHOAHOC', '=', 'THANHTOAN.MAKHOAHOC')->GET();
        return view('adminpages.managepayment')->with('allpayment', $allpayment);
    }
}
