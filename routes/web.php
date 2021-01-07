<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('patrol_leader', [App\Http\Controllers\UserController:: class,'patrol_lead'])->name('patrol_leader');
Route::get('patrol_commander', [App\Http\Controllers\UserController:: class,'patrol_comma'])->name('patrol_commander');
Route::get('user_patrol_evidence',[App\Http\Controllers\UserController:: class, 'user_patrol_evide'])->name('user_patrol_evidence');

Route::get('change_password', [App\Http\Controllers\UserController:: class, 'change_pass'])->name('change_password');
Route::get('user_profile', [App\Http\Controllers\HomeController:: class, 'user_prof'])->name('user_profile');
Route::get('term_privacy', [App\Http\Controllers\HomeController::class, 'term_priv'])->name('term_privacy');

Route::get('create_sexual_claim', [App\Http\Controllers\UserController:: class, 'create_sexual_clai'])->name('create_sexual_claim');
Route::post('create_sexual_claim', [App\Http\Controllers\UserController:: class, 'createSex'])->name('create_sexual');

Route::get('sexual_claims',[App\Http\Controllers\UserController::class, 'getSexual']);

Route::get('create_dawati_claim', [App\Http\Controllers\UserController:: class, 'create_dawati'])->name('create_dawati_claim');
Route::get('dawati_claims', [App\Http\Controllers\UserController::class,'dawati_clai'])->name('dawati_claims');
Route::get('dawati_progress', [App\Http\Controllers\UserController::class,'dawati_prog'])->name('dawati_progress');

Route::get('my_testimonal', [App\Http\Controllers\UserController::class, 'my_testimo'])->name('my_testimonals');
Route::get('create_testimonal', [App\Http\Controllers\UserController::class, 'create_testimo'])->name('create_testimonal');


Route::get('sexual_claims', [App\Http\Controllers\UserController:: class, 'sexual_clai'])->name('sexual_claims');
Route::get('sexual_progress', [App\Http\Controllers\UserController:: class, 'sexual_prog'])->name('sexual_progress');
