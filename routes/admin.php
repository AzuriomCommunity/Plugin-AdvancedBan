<?php

use Illuminate\Support\Facades\Route;
use Azuriom\Plugin\AdvancedBan\Controllers\Admin\SettingController;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your plugin. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" and "admin" middleware groups. Now create a great admin panel !
|
*/

Route::middleware('can:advancedban.admin')->group(function () {
    Route::get('/settings', [SettingController::class, 'show'])->name('settings');
    Route::post('/settings', [SettingController::class, 'save'])->name('settings.save');
});