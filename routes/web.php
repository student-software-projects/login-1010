<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;

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

/*
 *  RUTAS DEL LOGIN
 */
Route::redirect('/','login');
Route::get('login',[LoginController::class,'form_login'])->name('auth.form_login');
Route::post('auth',[LoginController::class,'auth'])->name('auth.auth');


/*
 *  RUTAS DEL DASHBOARD
 */

Route::get('dashboard',[DashboardController::class,'index'])->name('dashboard.index');


