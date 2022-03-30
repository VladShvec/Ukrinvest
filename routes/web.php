<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\HeaderController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\MainSliderController;
use App\Http\Controllers\NewsPageController;
use App\Http\Controllers\NewsPressController;
use App\Http\Controllers\OurMissionController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ServicesController;
use App\Models\Header;
use App\Models\Header_logo;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

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

Route::get('/', [MainController::class, 'index'])->name('main');
Route::get('locale/{locale}', function ($locale) {
    Session::put('locale', $locale);

    return redirect()->back();
})->name('locale');
Route::get('/about',[AboutController::class, 'index'])->name('about');
Route::get('/news',[NewsPageController::class, 'index'])->name('news');
Auth::routes();
//check

Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index']);
//header
    Route::get('/header', [HeaderController::class, 'index'])->name('admin.header');
    Route::delete('/header/delete/{id}', [HeaderController::class, 'destroy'])->name('admin.header.destroy');
    Route::post('/header', [HeaderController::class, 'store'])->name('admin.header.store');
    Route::put('/header', [HeaderController::class, 'update'])->name('admin.header.update');

//mainSlider
    Route::get('/slider', [MainSliderController::class, 'index'])->name('admin.slider');
    Route::delete('/slider/delete/{id}', [MainSliderController::class, 'destroy'])->name('admin.slider.destroy');
    Route::post('/slider', [MainSliderController::class, 'store'])->name('admin.slider.store');
    Route::put('/slider', [MainSliderController::class, 'update'])->name('admin.slider.update');

//Our Mission
    Route::get('/our_mission', [OurMissionController::class, 'index'])->name('admin.ourmission');
    Route::put('/our_mission', [OurMissionController::class, 'update'])->name('admin.ourmission.update');
//Services
    Route::get('/services', [ServicesController::class, 'index'])->name('admin.services');
    Route::delete('/services/{id}', [ServicesController::class, 'destroy'])->name('admin.services.destroy');
    Route::post('/services', [ServicesController::class, 'store'])->name('admin.services.store');
    Route::put('/services', [ServicesController::class, 'update'])->name('admin.services.update');

//News Press
    Route::get('/news_press', [NewsPressController::class, 'index'])->name('admin.newspress');
    Route::patch('/news_press', [NewsPressController::class, 'updateBlock'])->name('admin.news_press.updateBlock');
//Projects
    Route::get('/project', [ProjectController::class, 'index'])->name('admin.project');
    Route::delete('/project/{id}', [ProjectController::class, 'destroy'])->name('admin.project.destroy');
    Route::post('/project', [ProjectController::class, 'store'])->name('admin.project.store');
    Route::put('/project', [ProjectController::class, 'update'])->name('admin.project.update');


    Route::get('/form', [FormController::class, 'index'])->name('admin.form');
    Route::delete('/form/{id}', [FormController::class, 'destroy'])->name('admin.form.destroy');
    Route::post('/form', [FormController::class, 'store'])->name('admin.form.store');

//    Route::get('/form', [FormController::class, 'store'])->name('admin.form.store');
//footer
    Route::get('/footer', [FooterController::class, 'index'])->name('admin.footer');
    Route::post('/footer', [FooterController::class, 'store'])->name('admin.footer.store');
    Route::delete('/footer/{id}', [FooterController::class, 'destroy'])->name('admin.footer.destroy');
    Route::put('/news_press', [FooterController::class, 'update'])->name('admin.footer.update');

});



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
