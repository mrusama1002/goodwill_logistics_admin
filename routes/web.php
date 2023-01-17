<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PalletController;
use App\Http\Controllers\Admin\PostcodeController;
use App\Http\Controllers\Admin\PostcodeGroupController;

use App\Http\Controllers\Admin\OrderController;
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

Auth::routes();



Route::get('/',[App\Http\Controllers\FrontendController::class,'index']);


// Route::prefix('admin/')->group(function ()
Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function ()



{
    Route::get('/', [DashboardController::class, 'index']);

    Route::get('/dashboard',[DashboardController::class, 'index']);



    Route::resource('pallet', PalletController::class);


    Route::resource('postcode', PostcodeController::class);
    Route::resource('postcode-group', PostCodeGroupController::class);


    Route::resource('order', OrderController::class, ['names' => 'orders']);
});
