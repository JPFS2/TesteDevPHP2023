<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GitHubController;
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

Route::get('/api', function () {
    return view('index');
});

Route::post('/user', [GitHubController::class, 'getUser']);

Route::get('/', function () {
    return view('welcome');
});
