<?php

// Controllers
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\AdminChartController;
use App\Http\Controllers\Admin\DataController;
use App\Http\Controllers\Admin\RoleController;

use App\Http\Controllers\User\UserDashboardController;
use App\Http\Controllers\User\ChartController;
use App\Http\Controllers\User\WalletController;


use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');

Route::prefix('admin')->name('admin.')->middleware(['auth:sanctum','verified'])->group(function(){
    Route::get('/dashboard', [AdminDashboardController::class,'index'])->name('dashboard.index');

    Route::prefix('data')->name('data.')->group(function(){
        Route::get('/', [DataController::class,'index'])->name('index');
        Route::post('/', [DataController::class,'store'])->name('store');
        Route::patch('/{data}', [DataController::class,'update'])->name('update');
        Route::delete('/{data}', [DataController::class,'destroy'])->name('destroy');
    });

    Route::prefix('chart')->name('chart.')->group(function(){
        Route::get('/', [AdminChartController::class,'index'])->name('index');
        Route::post('/', [AdminChartController::class,'store'])->name('store');
        Route::patch('/{role}', [AdminChartController::class,'update'])->name('update');
        Route::delete('/{role}', [AdminChartController::class,'destroy'])->name('destroy');
    });

    Route::prefix('roles')->name('roles.')->group(function(){
        Route::get('/', [RoleController::class,'index'])->name('index');
        Route::post('/', [RoleController::class,'store'])->name('store');
        Route::patch('/{role}', [RoleController::class,'update'])->name('update');
        Route::delete('/{role}', [RoleController::class,'destroy'])->name('destroy');
    });

});




Route::prefix('user')->name('user.')->middleware(['auth:sanctum','verified'])->group(function(){
    Route::get('/dashboard', [UserDashboardController::class,'index'])->name('dashboard.index');

    Route::prefix('chart')->name('chart.')->group(function(){
        Route::get('/', [ChartController::class,'index'])->name('index');
        Route::post('/', [ChartController::class,'store'])->name('store');
        Route::patch('/{role}', [ChartController::class,'update'])->name('update');
        Route::delete('/{role}', [ChartController::class,'destroy'])->name('destroy');
    });

    Route::prefix('wallet')->name('wallet.')->group(function(){
        Route::get('/', [WalletController::class,'index'])->name('index');
        Route::post('/', [WalletController::class,'store'])->name('store');
        Route::patch('/{role}', [WalletController::class,'update'])->name('update');
        Route::delete('/{role}', [WalletController::class,'destroy'])->name('destroy');
    });
});


