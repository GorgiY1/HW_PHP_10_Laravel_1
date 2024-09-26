<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BbsController;
use Illuminate\Support\Facades\DB;

Route::get('/',[BbsController::class, 'index']);
Route::get('/test', function() {
    if (DB::connection()->getDatabaseName())  {
        $name = DB::connection()->getDatabaseName();
        dd($name);
    } else {
      return 'Error';
    }});
Route::get('/{bb}',[BbsController::class, 'detail']);
Route::get('/', [BbsController::class, 'index'])->name('index');
Route::get('/{bb}', [BbsController::class, 'detail'])->name('detail');

