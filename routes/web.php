<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\AnoteController;
use App\Http\Controllers\RemindersController;
use App\Http\Controllers\UserCrudController;
use App\Http\Controllers\NotasController;
use App\Http\Controllers\CalendarioController;

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

Route::get('/saludo', function () {
    return 'Hello World';
});

Route::get('/user', [UserController::class, 'index']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
  //diferentes metodos
    Route::get('/nota',[AnoteController::class,'index'])->name('notas');
    Route::get('/reminder',[RemindersController::class,'index'])->name('reminders');

    //Route::get('/notas/{id}',[AnoteController::class,'show'])->name('notas.show');

    //Route::get('/notasE/{id}',[AnoteController::class,'edit'])->name('notas.edit');
    //Route::get('/notasD/{id}',[AnoteController::class,'destroy'])->name('notas.destroy');
    //Route::get('/nota/{id}',[AnoteController::class,'create'])->name('notas.create');

    Route::resource('/notas',AnoteController::class);
    Route::resource('/reminders',RemindersController::class);
    //Route::resource('/recordatorios',ReminderController::class);

    Route::get('/asignaturas',[SubjectController::class,'index'])->name('asignaturas');
    Route::get('/calendario',[CalendarioController::class,'index'])->name('calendario');
    

    Route::resource('/users', UserCrudController::class);
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
