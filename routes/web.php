<?php

use App\Http\Controllers\FakeStudentController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
//use request de nhan du lieu gui len 
use Illuminate\Http\Request;
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
    return view('welcome');
});
//gia tri truyen vao url se tuong ung vi tri tham so cua function.

Route::view('/admin', 'test-admin');

Route::get('/fakeStudent/{id}/{age}', function ($id, $number){
    dd('gia tri truyen vao tren url : '. $id);
});
// Route::get('/fakeStudent', function (){
//     //lay ra mang student
//     $student = DB::table('fakeStudent') -> get();
//     // return $student;
//     //lay ra 1 student
//     // $student = DB::table('fakeStudent') -> where('id','=',1)->first();
//     return view('demoView' , ['student' => $student]);
// });
Route::get('/fakeStudent/detail', function (){
    // return view('welcome'); ;
    $student = DB::table('fakeStudent') -> where('id', '<',5)->get();
});

//cach 2;
Route::view('list' ,function(){
    return view('student.list');
});

Route::get('/student-list', function(){
    $student = DB::table('fakeStudent') -> orderBy('id', 'desc')->get();
    
    return view('student-list', ['students'=> $student]);
})-> name('student-list');

//chuc nang login + route post
Route::get('/login', function(){
    return view('login');
})-> name('login-view');

Route::post('/post-login', function(Request $request){
    //xu ly logic truy van... 
    //su dung $request->all() hoac $request->input name
    // dd($request->all());
    //thuc hien truy van theo gia tri gui len
    $username = $request->username;
    $student = DB::table('fakeStudent')->where('fakeStudent_name', 'like', "%$username%")-> first();
    if($student){
        return redirect() -> route('student-list');
    }
    //neu khong dc thi quay laij login-view
    return redirect() -> route('login-view');
})->name('post-login');


// tao route resource cho student controller
Route::resource('/FakeStudent', FakeStudentController::class);

// Tao route cho subject controller khong dung resource
// Route::get('/Fakestudent', [FakeStudentController::class, 'index']) ->name('FakeStudent.index');


