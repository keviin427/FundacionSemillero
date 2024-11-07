<?php

use App\Http\Controllers\Auth\AdminGeneralLoginController;
use App\Http\Controllers\Auth\EducadorLoginController;
use App\Http\Controllers\Auth\PsicologoLoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
///////////////////////////////////////////////
Route::get('/registerTemplate', function () {
    return view('registerTemplate');
})->name('registerTemplate');

Route::get('/register-sa', function () {
    return view('register-sa');
})->name('register-sa');

Route::get('/register-ed', function () {
    return view('register-ed');
})->name('register-ed');

Route::get('/register-ps', function () {
    return view('register-ps');
})->name('register-ps');
///////////////////////////////////////////////
Route::get('/loginTemplate', function () {
    return view('loginTemplate');
})->name('loginTemplate');

Route::get('/login-sa', function () {
    return view('login-sa');
})->name('login-sa');

Route::get('/login-ed', function () {
    return view('login-ed');
})->name('login-ed');

Route::get('/login-ps', function () {
    return view('login-ps');
})->name('login-ps');
/////////////////////////////////////////////////////
//Psicologo
Route::get('/psicologo/login', [PsicologoLoginController::class, 'showLoginForm'])->name('psicologo.login');
Route::post('/psicologo/login', [PsicologoLoginController::class, 'login']);
//Educador
Route::get('/educador/login', [EducadorLoginController::class, 'showLoginForm'])->name('educador.login');
Route::post('/educador/login', [EducadorLoginController::class, 'login']);
//AdminGeneral
Route::get('/admingeneral/login', [AdminGeneralLoginController::class, 'showLoginForm'])->name('admingeneral.login');
Route::post('/admingeneral/login', [AdminGeneralLoginController::class, 'login']);
/////////////////////////////////////////////////////

Route::group(['middleware' => ['auth', 'load.user.profile']], function () {
    Route::get('/home', function () {
        return view('home');
    })->name('home');
});

//////////////////////////////////////////////////////

//////////////////////////////////////////////////////

Route::group(['middleware' => ['auth:psicologo,educador,adminGeneral,sanctum']], function () {
    
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'show'])->name('profile');
});
