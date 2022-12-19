<?php

use App\Http\Controllers\API\ReclamacaoController;
use App\Http\Controllers\API\ElogioController;
use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('reclamacoes', [ReclamacaoController::class,'index']);
Route::get('reclamacoes/{reclamacao}', [ReclamacaoController::class,'show']);

Route::group(['middleware'=>['auth:sanctum']], function() {
    Route::post('reclamacoes', [ReclamacaoController::class,'store']);
    Route::put('reclamacoes/{reclamacao}', [ReclamacaoController::class,'update']);
    Route::delete('reclamacoes/{reclamacao}', [ReclamacaoController::class,'destroy']);

    Route::get('elogios', [ElogioController::class,'index']);
    Route::get('elogios/{elogio}', [ElogioController::class,'show']);
    Route::post('elogios', [ElogioController::class,'store']);
    Route::put('elogios/{elogio}', [ElogioController::class,'update']);
    Route::delete('elogios/{elogio}', [ElogioController::class,'destroy']);

    Route::post('/logout', [AuthController::class, 'logout']);
});