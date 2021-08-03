<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\RouteController;

    Route::get('/analytics', [RouteController::class, 'analytics'])->name('analytics');
    Route::get('/sales', [RouteController::class, 'sales'])->name('sales');
    Route::get('/', [RouteController::class, 'login_boxed'])->name('login_boxed');
    Route::get('/components/modals', [RouteController::class, 'modals'])->name('modals');
    Route::get('/tables/datatables/basic', [RouteController::class, 'table'])->name('tables');
    Route::get('/components/notifications', [RouteController::class, 'alert'])->name('notification');
    Route::get('/components/tabs', [RouteController::class, 'tabs'])->name('tabs');