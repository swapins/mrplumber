<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\FaqController;
use Illuminate\Support\Facades\Route;

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


Route::get('/',[ServicesController::class,'home']);
Route::get('/services',[ServicesController::class,'index']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/brandSites',[BrandController::class,'brandSites']);

    Route::get('/leads',[ContactFormController::class,'index'])->name('leads');
    Route::get('/faq',[FaqController::class,'index'])->name('faq');
    Route::get('/brands',[BrandController::class,'index'])->name('brands');
    Route::get('/service_db',[ServicesController::class,'db'])->name('service_db');
    Route::post('/savefaq',[FaqController::class,'save']);
    Route::get('/seo', function(){ return view('seo');})->name('seo');

    Route::delete('/faq_del',[FaqController::class,'delete'])->name('faqdelete');
    Route::delete('/faq_edit',[FaqController::class,'edit'])->name('faqedit');

    Route::delete('/contact_delete',[ContactFormController::class,'destroy'])->name('contact_destroy');

    Route::get('/test', function () {
        return view('mrplumber');
    });
});



require __DIR__.'/auth.php';
