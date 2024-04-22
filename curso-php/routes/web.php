<?php

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
use App\Http\Controllers\EventController;

Route::get('/', [EventController::class, 'index']);

Route::get('/events/create', [EventController::class, 'create']);

Route::get('/events/{$id}', [EventController::class, 'show']);

Route::post('/events', [EventController::class, 'store']);

Route::get('/events/events', [EventController::class, 'events']);
Route::get('/events/contact', [EventController::class, 'contact']);
Route::get('/events/login', [EventController::class, 'login']);
Route::get('/events/register', [EventController::class, 'register']);

?>