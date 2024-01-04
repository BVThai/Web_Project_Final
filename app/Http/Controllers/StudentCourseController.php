<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use League\CommonMark\Extension\Table\Table;

session_start();
class StudentCourseController extends Controller
{
    public function st_course(){
        $toeic = DB::table('KHOAHOC')->where('LOAIKHOAHOC', 'Toiec')->get();
        $ielts = DB::table('KHOAHOC')->where('LOAIKHOAHOC', 'Ielts')->get();
        return view('pages.student')->with('toeic', $toeic)->with('ielts', $ielts);
    }
    public function viewdetailcourse($makhoahoc){
        $detail_course = DB::table('khoahocchitiet')->where('MAKHOAHOC', $makhoahoc)->get();
        $mota = DB::table('KHOAHOC')->where('MAKHOAHOC', $makhoahoc)->get();
        $lophoc = DB::table('LOPHOC')->where('MAKHOAHOC', $makhoahoc)->first();
        return view('pages.detailcourse')->with('detail_course', $detail_course)->with('mota', $mota)->with('lophoc', $lophoc);
    }
    
}
