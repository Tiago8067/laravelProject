<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{AuthenticationController, HomePageController, DataTableController};

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user/login', [AuthenticationController::class, 'getLogin'])->name('getLogin');
Route::post('/user/login',[AuthenticationController::class,'login'])->name('login');//->middleware('throttle:2,1');

Route::get('/user/homePage', [HomePageController::class, 'homePage'])->name('homePage');
Route::get('/user/logout', [HomePageController::class, 'logout'])->name('logout');
Route::get('/user/add-dataTable', [HomePageController::class, 'addDataTable'])->name('addDataTable');
Route::post('/user/save-dataTable', [HomePageController::class, 'saveDataTable'])->name('saveDataTable');

// Route::get('/user/add-dataTable/info-tecnico', [DataTableController::class, 'infoTecnico'])->name('infoTecnico');
// Route::get('/user/add-dataTable/info-tipo-agente-extintor', [DataTableController::class, 'infoTipoAgenteExtintor'])->name('infoTipoAgenteExtintor');
