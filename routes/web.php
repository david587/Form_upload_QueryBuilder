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
Route::post("/send",[PcController::class,"store_part"]);
Route::post("/send",[PcController::class,"store_type"]);
Route::get("/form", [PcController::class,"show_form"]);



