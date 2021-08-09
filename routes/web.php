<?php
use App\Http\Controllers\HomeController;
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

Route::get('home',[HomeController::class, 'index'])->name('home.index');
Route::get('new_user',[HomeController::class, 'adduser'])->name('new_user.adduser');
Route::get('new_inventory',[HomeController::class, 'addinventory'])->name('new_inventory.addinventory');
Route::get('manage_inventory',[HomeController::class, 'inventory'])->name('manage_inventory.inventory');
Route::get('manage_stations',[HomeController::class, 'stations'])->name('manage_stations.stations');
Route::get('inventory_classification',[HomeController::class, 'classification'])->name('inventory_classification.classification');