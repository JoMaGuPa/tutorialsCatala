<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImportIfixitController;
use App\Http\Controllers\GuideController;
use App\Http\Controllers\IfixitController;

Route::get('/', function () {
    return view('welcome');
});

// Importar datos desde iFixit
Route::get('/import-ifixit', [ImportIfixitController::class, 'index'])->name('importIfixit.index');

// Rutas de guías
Route::get('/guides', [GuideController::class, 'index'])->name('guides.index');
Route::get('/guides/{guide}', [GuideController::class, 'show'])->name('guides.show');

// Importar y traducir guías desde iFixit
Route::get('/ifixit/import', [IfixitController::class, 'importAndTranslateGuides'])->name('ifixit.import');
