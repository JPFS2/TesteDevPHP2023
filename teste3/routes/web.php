<?php
use App\Http\Controllers\ViaCepController;
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
    return view('via-cep');
});

Route::post('/consultar-cep', [ ViaCepController::class, 'consultarCep']);
Route::get('/exportar-csv', [ ViaCepController::class, 'exportarCsv']);
