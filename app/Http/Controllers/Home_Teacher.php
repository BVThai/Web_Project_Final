<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

session_start();
class Home_Teacher extends Controller
{
    public function index(){
        return view("pages.teacher");
    }
    public function load_teacher(){
        $all_teacher = DB::table("GIAOVIEN")->get();
        return view("pages.teacher")->with('all_teacher', $all_teacher);
    }
}
