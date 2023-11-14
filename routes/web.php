<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

//Rutas para operaciones básicas
Route::get('/suma/{num1}/{num2}', function (string $num1, string $num2) {
    return 'Resultado: ' . $num1 + $num2;
})->where(['num1' => '[0-9]+', 'num2' => '[0-9]+']);

Route::get('/resta/{num1}/{num2}', function (string $num1, string $num2) {
    return 'Resultado: ' . $num1 - $num2;
})->where(['num1' => '[0-9]+', 'num2' => '[0-9]+']);

Route::get('/multi/{num1}/{num2}', function (string $num1, string $num2) {
    return 'Resultado: ' . $num1 * $num2;
})->where(['num1' => '[0-9]+', 'num2' => '[0-9]+']);

Route::get('/division/{num1}/{num2}', function (string $num1, string $num2) {
    return 'Resultado: ' . $num1 / $num2;
})->where(['num1' => '[0-9]+', 'num2' => '[0-9]+']);

// rutas para saludos
Route::get('/saludo/{name}/{lastname?}', function (string $name, ?string $lastname = null) {
    return 'Hola '.$name .' ' .$lastname;
})->where(['name' => '[A-Za-z]+', 'lastname' => '[A-Za-z]+']);
//ruta para saludo desde vista
// Route::get('/greeting/{name}/{lastname?}', function (string $name, ?string $lastname = null) {
//     return view('greeting', ['name' => $name, 'lastname' => $lastname]);
// })->where(['name' => '[A-Za-z]+', 'lastname' => '[A-Za-z]+']);

Route::get('/greeting/{name}/{lastname?}', [UserController::class, 'show'])->where(['name' => '[A-Za-z]+', 'lastname' => '[A-Za-z]+']);

//Rutas para carritos
Route::get('/carritos', [CarController::class, 'index']);
Route::get('/carritos/{car}', [CarController::class, 'show'])->where(['car' => '[0-9]+']);