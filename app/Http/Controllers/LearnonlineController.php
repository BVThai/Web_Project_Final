<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

session_start();
class LearnonlineController extends Controller
{
    public function hoconline(){
       return view('pages.hoconline');
    }
    public function Thembuoihoconline(Request $request){
        $malophoc = Session::get('malophoc');
        $data = array();
        $data['DOMAIN'] = $request->domain;
        $data['OPTIONS'] = $request->options;
        $data['NGAYTAO'] = now()->format("Y-m-d");
        $data['MALOPHOC'] = $malophoc;
        DB::table('BUOIHOC')->insert($data);
    }
    public function thamgiahoc($malophoc){
        $ngayhientai = now()->format("Y-m-d");
        $link_hoc = DB::table('BUOIHOC')->where('MALOPHOC', $malophoc)
                    ->where('NGAYTAO', $ngayhientai)
                    ->orderByDesc('MABUOIHOC')
                    ->first();
        $lophoc = DB::table('LOPHOC')->where('MALOPHOC', $malophoc)->get();
        return view('pages.thamgiahoc')->with('link_hoc', $link_hoc)->with('lophoc', $lophoc);
    }
}
