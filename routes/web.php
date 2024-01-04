<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\Home_Teacher;
use App\Http\Controllers\LearnonlineController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\SigupController;
use App\Http\Controllers\StudentCourseController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\TestonlineController;
use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\Test;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('pages.index');
});
Route::get('/welcome', function () {
    return view('pages.index');
});

Route::get('/sigup', [SigupController::class, 'index']);
Route::get('/login', [LoginController::class, 'index']);
Route::get('/logout', [LoginController::class, 'logout']);


Route::get('/student', [LoginController::class,'all_user_show']);

Route::get('/adminlogin',[AdminController::class,'viewloginadmin']);
Route::get('/admin', [AdminController::class,'index']);
Route::match(['get', 'post'], '/sigupsucessadmin', [AdminController::class, 'sigupSuccessadmin'])->name('sigupsucessadmin');


Route::get('/viewallcustomer', [AdminController::class,'viewallcustomer']);
Route::get('/viewaddcustomer', [AdminController::class,'viewaddcustomer']);
Route::get('/viewupdatecustomer', [AdminController::class,'vieweditcustomer']);
Route::get('/deletecustomer/{manguoidung}', [AdminController::class,'deletecustomer']);
Route::get('/updatecustomer/{manguoidung}', [AdminController::class,'updatecustomer']);
Route::match(['get','post'],'/addcustomer', [AdminController::class,'addcustomer'])->name('ad_add_customer');
Route::match(['get', 'post'], '/processupdatecustomer/{manguoidung}', [AdminController::class, 'processupdate']);


//Route::post('/sigupsucess', [LoginController::class,'showSigup']);
//Route::post('/sigupsucess', [LoginController::class, 'sigupSuccess'])->name('sigupsucess');
//Route::get('/sigupsucess', [LoginController::class, 'sigupSuccess'])->name('sigupsucess');
Route::match(['get', 'post'], '/sigupsucess', [LoginController::class, 'sigupSuccess'])->name('sigupsucess');
Route::match(['get', 'post'], '/save_account', [SigupController::class, 'save_account'])->name('save_account');

Route::get('/viewaddteacher', [AdminController::class,'viewaddteacher']);
Route::get('/viewallteacher', [AdminController::class,'viewallteacher']);
Route::match(['get','post'],'/addteacher', [AdminController::class,'addteacher'])->name('ad_add_teacher');
Route::get('/updateteacher/{magiaovien}', [AdminController::class,'updateteacher']);
Route::match(['get', 'post'], '/processupdateteacher/{magiaovien}', [AdminController::class, 'processupdateteacher']);
Route::get('/deleteteacher/{magiaovien}', [AdminController::class,'deleteteacher']);
Route::get('/selectteacher/{magiaovien}', [AdminController::class,'selectteacher']);


Route::get('/viewaddcourse', [AdminController::class,'viewaddcourse']);
Route::match(['get','post'],'/addcourse', [AdminController::class,'addcourse'])->name('ad_add_course');
Route::get('/updatecourse/{makhoahoc}', [AdminController::class,'updatecourse']);
Route::get('/viewallcourse', [AdminController::class,'viewallcourse']);
Route::match(['get', 'post'], '/processupdatecourse/{makhoahoc}', [AdminController::class, 'processupdatecourse']);
Route::get('/deletecourse/{makhoahoc}', [AdminController::class,'deletecourse']);


Route::get('/viewaddclass', [AdminController::class,'viewaddclass']);
Route::match(['get','post'],'/addclass', [AdminController::class,'addclass'])->name('ad_add_class');
Route::get('/viewallclass', [AdminController::class,'viewallclass']);
Route::get('/updateclass/{malophoc}', [AdminController::class,'updateclass']);
Route::match(['get', 'post'], '/processupdateclass/{malophoc}', [AdminController::class, 'processupdateclass']);
Route::get('/deleteclass/{malophoc}', [AdminController::class,'deleteclass']);


Route::get('/viewaddclasscal', [AdminController::class,'viewaddclasscal']);
Route::match(['get','post'],'/addclasscal', [AdminController::class,'addclasscal'])->name('ad_add_classcal');
Route::get('/viewallclasscal', [AdminController::class,'viewallclasscal']);
Route::get('/updateclasscal/{malichhoc}', [AdminController::class,'updateclasscal']);
Route::match(['get', 'post'], '/processupdateclasscal/{mabuoihoc}', [AdminController::class, 'processupdateclasscal']);
Route::get('/deleteclasscal/{mabuoihoc}', [AdminController::class,'deleteclasscal']);


Route::get('/viewaddstclass', [AdminController::class,'viewaddstclass']);
Route::match(['get','post'],'/addstclass', [AdminController::class,'addstclass'])->name('ad_add_stcalss');
Route::get('/viewallstclass', [AdminController::class,'viewallstclass']);
Route::get('/updatestclass/{mahocvien}/{makhoahoc}/{malophoc}', [AdminController::class,'updatestclass']);
Route::match(['get', 'post'], '/processupdatestclass/{mahocvien}/{makhoahoc}/{malophoc}', [AdminController::class, 'processupdatestclass']);
Route::get('/deletestclass/{mahocvien}/{makhoahoc}/{malophoc}', [AdminController::class,'deletestclass']);

Route::get('/viewaddquestion', [AdminController::class,'viewaddquestion']);
Route::match(['get','post'],'/addquestion', [AdminController::class,'addquestion'])->name('ad_add_question');


//trang chu giao vien
Route::get('/teacher', [Home_Teacher::class,'load_teacher']);


//khoa hoc
Route::get('/viewtoeic',[CourseController::class, 'viewtoeic']);

//ajax

Route::match(['get', 'post'], '/getclassname', [AdminController::class, 'getclassname']);

//thi online 
Route::get('/viewtest',[TestonlineController::class, 'getquestion']);
Route::match(['get','post'],'/addreply', [TestonlineController::class,'addreply'])->name('add_reply');

//saulogin doi voi hoc sinh
Route::get('/st_course',[StudentCourseController::class, 'st_course']);
Route::get('/viewdetailcourse',[StudentCourseController::class, 'viewdetailcourse']);
Route::get('/viewdetailcourse/{makhoahoc}', [StudentCourseController::class,'viewdetailcourse']);
// thanh toan
Route::get('/PaymentMethod/{makhoahoc}', [PaymentController::class,'PaymentMethod']);
Route::get('/ProccessPayment/{makhoahoc}/{malophoc}/{gia}',[PaymentController::class,'ProccessPayment']);
Route::get('/Khoahocdamua', [CourseController::class,'khoahocdamua']);
Route::get('/tonghopthithu', [TestonlineController::class,'tonghopthi']);
Route::get('/XemChiTietThi/{malanthi}', [TestonlineController::class,'Xemchitietthi']);
Route::get('/thongtinlichhoc', [CourseController::class,'lichhoc']);
Route::get('/Teacher', [TeacherController::class,'tatcagiaovien']);
Route::get('/Allcourseteach', [TeacherController::class,'khoahocdangday']);
Route::get('/Thongtinchitietlop/{malophoc}', [TeacherController::class,'thongtinchiitetlop']);
Route::get('/Xemhocvienthuoclop/{malophoc}', [TeacherController::class,'tatcahocvien']);
Route::get('/Themthongbaolophoc', [TeacherController::class,'themthongbao']);
Route::match(['get', 'post'], '/Themthongbao', [TeacherController::class, 'themthongbao']);
Route::get('/Danhsachthongbao', [TeacherController::class,'danhsachthongbao']);
Route::get('/Formthemthongbao', [TeacherController::class,'formthemthongbao']);
Route::get('/Xoathongbao/{mathongtin}', [TeacherController::class,'xoathongbao']);
Route::get('/Tatcalichday', [TeacherController::class,'lichdaygiaovien']);
Route::get('/Thongbaolophochocvien/{malophoc}', [CourseController::class,'dstbhv']);
Route::get('/Hoconline', [LearnonlineController::class,'hoconline']);
Route::match(['get', 'post'], '/Thembuoihoconline', [LearnonlineController::class, 'Thembuoihoconline']);
Route::get('/Thamgiahoc/{malophoc}', [LearnonlineController::class,'thamgiahoc']);
Route::get('/Tatcathanhtoan', [PaymentController::class,'GetAllPayment']);


