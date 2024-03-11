<?php

use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\EnquiryController;
use App\Http\Controllers\HomeController;
// use App\Http\Controllers\UploadController;
use Illuminate\Support\Facades\Route;
// use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

/*s
|--------------------------------------------------------------------------s
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('admin', [LoginController::class, 'index'])->name('login');
Route::post('admin/login', [LoginController::class, 'login'])->name('login.post');

// for particular page open
Route::get('contact', [HomeController::class,'contact'])->name('contact'); 
Route::get('/', [HomeController::class,'index'])->name('home'); 
Route::GET('/{urlKey}', [HomeController::class,'page'])->name('page'); 

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('user', UserController::class);
    Route::resource('slider', SliderController::class);
    Route::resource('page', PageController::class);
    Route::resource('blog', BlogController::class);
    Route::get('logout', [LoginController::class, 'logout'])->name('logout');
    Route::resource('role',RoleController::class);
    Route::resource('permission',PermissionController::class);
    Route::get('enquiry', [EnquiryController::class, 'index'])->name('enquiry');
    Route::Post('enquiry-status', [EnquiryController::class,'status'])->name('enquiry-status'); 
    Route::delete('enquiry-destroy/{id}', [EnquiryController::class,'destroy'])->name('enquiry-destroy'); 
    Route::post('ckeditor/upload', [PageController::class, 'upload'])->name('ckeditor.upload');

});
Route::post('store', [EnquiryController::class, 'store'])->name('store');
// another way to use prefix in laravel-10
// Route::prefix('admin')->group(function(){
//     Route::get('login', [LoginController::class, 'index'])->name('login');
// });

// Route::get("/upload",function() {
//     return view("upload");
// }); 
// Route::post("/upload",[UploadController::class,"upload"]);

// Route::get("home",[HomeController::class,'home']);
