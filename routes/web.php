<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\StoryController;
use App\Http\Controllers\WorkController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BlogController;
use App\Models\Upload;

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

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', [GeneralController::class, 'home']);
Route::get('/test', [TestController::class, 'test']);
Route::post('/contact', [GeneralController::class, 'contact']);

Route::get('blogs', [BlogController::class, 'blogs']);
Route::get('blogs/{slug}', [BlogController::class, 'single']);
Route::get('tags/{slug}', [BlogController::class, 'tags']);


Route::group(['middleware' => ['auth']], function () {
    Route::resource('admin/users', UserController::class);
    Route::resource('admin/experiences', ExperienceController::class);
    Route::resource('admin/stories', StoryController::class);
    Route::resource('admin/works', WorkController::class);
    Route::resource('admin/uploads', UploadController::class);
    Route::resource('admin/profiles', ProfileController::class);
    Route::resource('admin/blogs', BlogController::class);
    Route::get('/logout', [AuthController::class, 'logout']);

    Route::controller(GeneralController::class)->group(function () {
        Route::get('/admin/story', 'story');
        Route::post('/admin/story', 'store');
    });
});

Route::controller(AuthController::class)->group(function () {
    Route::get('/login', 'login')->name('login');
    Route::post('/authenticate', 'authenticate');
    Route::get('/register', 'register');
    Route::post('/signup', 'signup');
});
