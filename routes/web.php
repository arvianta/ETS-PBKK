<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RekamMedisController;
require __DIR__.'/auth.php';

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

Route::group(['middleware' => ['auth', 'verified']], function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/rekam-medis', [RekamMedisController::class, 'getAllPaginated'])->name('rekam-medis.list');
    Route::get('/rekam-medis-pasien', [RekamMedisController::class, 'showByPasien'])->name('rekam-medis.pasien.list');
    Route::get('/rekam-medis-dokter', [RekamMedisController::class, 'showByDokter'])->name('rekam-medis.dokter.list');

    Route::get('/create-rekam-medis', [RekamMedisController::class, 'viewCreate'])->name('rekam-medis.create');
    Route::post('/add-rekam-medis', [RekamMedisController::class, 'create'])->name('rekam-medis.add');

        
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

