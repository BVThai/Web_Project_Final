<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use League\CommonMark\Extension\Table\Table;

session_start();

class TestonlineController extends Controller
{
    public function viewtest()
    {
        return view('pages.testonline');
    }
    public function getquestion()
    {
        
        $all_question = DB::table("cauhoithithu")->inRandomOrder()->take(10)->get();
        $mahocvien = Session::get("useid");
        $ngayhientai = now()->format("Y-m-d");
        $malanthi = DB::table('SOLANTHI')->insertGetId(['MAHOCVIEN' => $mahocvien, 'SOCAUDUNG' => 0, 'NGAYTHI' => $ngayhientai]);
        return view('pages.testonline')->with('all_question', $all_question)->with('malanthi', $malanthi);
    }
    public function addreply(Request $request)
    {
        $solanthi = $request->input('solanthi');

        foreach ($request->except('_token', 'solanthi') as $key => $value) {
            $data = array();
            $data['MALANTHI'] = $solanthi;
            $data['MACAUHOI'] = $key;
            $data['CAUTRALOI'] = $value ? $value : 0;
            DB::table('CAUTRALOI')->insert($data);
            $cauTraLois = DB::table('CAUTRALOI')->where('MALANTHI', $solanthi)->get();

            if ($cauTraLois->isNotEmpty()) {
                $tongDiem = 0;

                foreach ($cauTraLois as $cauTraLoi) {
                    $maCauHoi = $cauTraLoi->MACAUHOI;
                    $cauTraLoiNguoiDung = $cauTraLoi->CAUTRALOI;

                    $dapAnDung = DB::table('cauhoithithu')->where('MACAUHOI', $maCauHoi)->value('DAPAN');

                    if (strtolower($cauTraLoiNguoiDung) == strtolower($dapAnDung)) {
                        $tongDiem++;
                    }
                }
                $data = array();
                $data['SOCAUDUNG'] = $tongDiem;
                // Cập nhật cột diem trong bảng solanthi
                DB::table('SOLANTHI')->where('MALANTHI', $solanthi)->update($data);
              
            } else {
                $tongDiem = 0;
            }
        }
        return Redirect::to('/tonghopthithu');
    }
    public function tonghopthi(){
        $mahocvien = Session::get('useid');
        $tonghop = DB::table('SOLANTHI')->where('MAHOCVIEN', $mahocvien)->orderByDesc('MALANTHI')->get();
        return view('pages.tonghoplanthi')->with('tonghoplanthi', $tonghop);
    }
    public function Xemchitietthi($malanthi){
        $ttlanthi = DB::table('SOLANTHI')->where('MALANTHI', $malanthi)->get();
        $ttcautl = DB::table('CAUTRALOI')
                    ->join('CAUHOITHITHU', 'CAUTRALOI.MACAUHOI', '=', 'CAUHOITHITHU.MACAUHOI')
                    ->where('MALANTHI' ,$malanthi)->get();
        return view('pages.chitietthi')->with('tttcautl', $ttcautl)->with('ttlanthi', $ttlanthi);
    }
}
