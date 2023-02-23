<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ControladorAdmin;
use App\Http\Middleware\CheckAdmin;

Route::get('articulos', [ControladorAdmin::class,'articulos'])->middleware(CheckAdmin::class)->name('inici');
Route::get('clientes', [ControladorAdmin::class,'clientes'])->middleware(CheckAdmin::class)->name('clients');
Route::get('facturacion', [ControladorAdmin::class,'facturacion'])->middleware(CheckAdmin::class)->name('facturacio');
Route::get('contabilidad', [ControladorAdmin::class,'contabilidad'])->middleware(CheckAdmin::class)->name('comptabilitat');