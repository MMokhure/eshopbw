<?php
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\StationController;

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
    return view('home');
});

Route::get('home',[HomeController::class, 'index'])->name('home.index');
Route::get('new_user',[HomeController::class, 'adduser'])->name('new_user.adduser');


Route::get('new_inventory',[HomeController::class, 'addinventory'])->name('new_inventory.addinventory');

//Crud route
Route::post('desktops',[PostController::class, 'store']);
Route::post('laptops',[PostController::class, 'storeLaptop']);
Route::post('scanners',[PostController::class, 'addScanner']);
Route::post('printers',[PostController::class, 'addPrinter']);
Route::post('switches', [PostController::class, 'addHub']);
Route::post('monitors', [PostController::class, 'addMonitor']);
Route::post('tablets', [PostController::class, 'addTablet']);
Route::post('routers', [PostController::class, 'addRouter']);
Route::post('servers', [PostController::class, 'addServer']);


//Crud Stations
Route::post('stations', [StationController::class, 'addStation']);


Route::get('manage_inventory',[HomeController::class, 'inventory'])->name('manage_inventory.inventory');
Route::get('manage_stations',[HomeController::class, 'stations'])->name('manage_stations.stations');
Route::get('inventory_classification',[HomeController::class, 'classification'])->name('inventory_classification.classification');