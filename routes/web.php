<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\StatisticsController;
use App\Http\Controllers\UserController;

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
Route::get('studentdash', function () {
    return view('studentdash');
});
Route::get('staffdash', function () {
    return view('staffdash');
});
Route::get('non-staff', function () {
    return view('non_staff');
});
Route::get('full-calender', function () {
    return view('full-calender');
});
Route::get('exams', function () {
    return view('exams');
});
Route::get('results', function () {
    return view('results');
});
Route::get('users', function () {
    return view('users');
});
Route::get('edit-user', function () {
    return view('edit-user');
});
// Route::get('/',[SliderController::class,'index']);


//auth route for both staff and student
Route::group(['middleware'=>['auth']],function(){
    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');
    Route::get('/dashboard',[StatisticsController::class,'index'])->name('dashboard');

});

Route::group(['middleware' =>['auth']], function(){
    Route::get('/full-calender',[StudentController::class,'fullcalender'])->name('full-calender');
    Route::get('/results',[StudentController::class,'results'])->name('results');
    Route::get('/exams',[StudentController::class,'exams'])->name('exams');
    Route::get('/users',[UserController::class,'index'])->name('users');
    Route::resource('edit-user', StudentController::class);
    // Route::get('/edit-user',[UserController::class,'edit'])->name('edit-user');
    Route::get('/add-user',[UserController::class,'create'])->name('add-user');
    Route::post('/add-user',[UserController::class,'store'])->name('save.user');
    // Route::get('/edit-user/{id}',[UserController::class,'edit'])->name('edit.user');
    // Route::post('/update-user/{id}',[UserController::class,'update'])->name('update.user');
    Route::post('/delete-user',[UserController::class,'destroy'])->name('delete-user');


});
require __DIR__.'/auth.php';
