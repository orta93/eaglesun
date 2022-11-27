<?php

use App\Http\Controllers\ItemController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\SymptomsController;
use App\Http\Controllers\TreatmentsController;
use App\Models\Category;
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
    return view('home');
});

Route::get('/equipo', function () {
    return view('team');
})->name('team');

Route::get('/nuetra-propuesta', function () {
    return view('proposal');
})->name('proposal');

Route::get('/contacto', function () {
    return view('contact');
})->name('contact');

Route::get('/item/create', function () {
    $categories = Category::where('type', 'tratamiento')->where('id', '>', 16)->get();
    return view('create-item', ['categories' => $categories]);
});
Route::post('/item/create', [ItemController::class, 'store']);
Route::group(['prefix' => '/servicios'], function () {
    Route::get('/', [ServicesController::class, 'index'])->name('services');
    Route::get('/{service_slug}', [ServicesController::class, 'show'])->name('services_detail');
});

/*Route::group(['prefix' => '/sintomas'], function () {
    Route::get('/create', function () {
        return view('create-symptom');
    });
    Route::post('/create', [SymptomsController::class, 'store']);
    Route::get('/', [SymptomsController::class, 'index'])->name('symptoms');
    Route::get('/{initial}', [SymptomsController::class, 'initial'])->name('symptoms_initial');
});*/

/*Route::group(['prefix' => '/tratamientos'], function () {
    Route::get('/', [TreatmentsController::class, 'index'])->name('treatments');
    Route::get('/{treatment_slug}', [TreatmentsController::class, 'show'])->name('treatments_detail');
});*/

Route::get('/{item_slug}', [ItemController::class, 'show'])->name('item');
