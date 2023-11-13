<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\TestController;
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

/*Route::get('/', function () {
    return "home";
});*/

Route::get('/', [TestController::class, 'home']);
Route::get('/about', [TestController::class, 'about']);

Route::get('/students', [StudentController::class, 'index']);
Route::get('/students/create', [StudentController::class, 'create']);
Route::post('/students', [StudentController::class, 'store']);

Route::get('/students/show/{student}', [StudentController::class, 'show']);
Route::get('/students/edit/{student}', [StudentController::class, 'edit']);
Route::post('/students/update/{student}', [StudentController::class, 'update']);
Route::post('/students/destroy/{student}', [StudentController::class, 'destroy']);