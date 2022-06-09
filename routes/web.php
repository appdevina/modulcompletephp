<?php

use App\Http\Controllers\BudayaPerusahaanController;
use App\Http\Controllers\CompleteSelularController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\JobDescController;
use App\Http\Controllers\PendahuluanController;
use App\Http\Controllers\PenjelasanPekerjaanController;
use App\Http\Controllers\ProgramController;

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
Route::get('dashboard',[DashboardController::class,'index']);
Route::get('pendahuluan', [PendahuluanController::class, 'index']);
Route::get('completeselular', [CompleteSelularController::class, 'index']);
Route::get('budayaperusahaan', [BudayaPerusahaanController::class, 'index']);
Route::get('pengenalan', [ProgramController::class, 'index']);
Route::get('jobdesc', [JobDescController::class, 'index']);
Route::get('pekerjaan', [PenjelasanPekerjaanController::class, 'index']);

