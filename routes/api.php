<?php

use App\Http\Controllers\BrindeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//throttle:1334,1 = Permitir até 80k requisições por hora antes de dar erro
Route::get('brindes',  [BrindeController::class, 'index'])->middleware('throttle:1334,1'); 
Route::post('brindes',  [BrindeController::class, 'store'])->middleware('throttle:1334,1');;
Route::get('brindes/{term}',  [BrindeController::class, 'getBySearch'])->middleware('throttle:1334,1');;