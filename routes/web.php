<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PcController;

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

Route::post("/send",[PcController::class,"store"]);
// Route::post("/send",[PcController::class,"store_part"]);
Route::get("/form", [PcController::class,"show_form"]);
Route::get("/all",[PcController::class,"show_all"]);
Route::get("/find",[PcController::class,"find"]);





