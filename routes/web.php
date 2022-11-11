<?php

use App\Http\Controllers\play88Controller;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware(['blockIP'])->controller(play88Controller::class)->group(function () {
    Route::get('admin', 'index');
    Route::post('admin-import', 'import')->name('admin.import');
    Route::get('admin-export', 'export')->name('admin.export');

    Route::get('admin-grand-prize', 'indexGrandPrize');
    Route::post('admin-import-grand-prize', 'importGrandPrize')->name('admin.importGrandPrize');
    Route::get('admin-export-grand-prize', 'exportGrandPrize')->name('admin.exportGrandPrize');
});

// retrieve raffle_tickets data based on username
Route::post('/action', [play88Controller::class, 'action'])->name('action');

// play88 visitors
Route::get('/', function () {
    return view('visitors');
});
