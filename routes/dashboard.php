<?php

use App\Http\Controllers\Dashboard\AdvertisementController;
use App\Http\Controllers\Dashboard\BannerController;
use App\Http\Controllers\Dashboard\BlogController;
use App\Http\Controllers\Dashboard\CategoryController;
use App\Http\Controllers\Dashboard\ContactController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\EmployeeController;
use App\Http\Controllers\Dashboard\PageController;
use App\Http\Controllers\Dashboard\RoleController;
use App\Http\Controllers\Dashboard\SettingController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:employee'])->prefix('dashboard')
    ->name('dashboard.')
    ->group(function (){


        // Route Dashboard
        Route::get('/',[DashboardController::class,'index'])
            ->name('dashboard');

        // Route to get all contacts
        Route::get('/contacts',[ContactController::class,'index'])
            ->name('contacts');

        // Route to delete contact
        Route::delete('/contacts/{contact}',[ContactController::class,'destroy'])
            ->name('contacts.destroy');

        // Route to edit Settings
        Route::get('settings/edit',[SettingController::class,'edit'])
            ->name('settings.edit');

        // Route to update Settings
        Route::put('settings/update/{setting}',[SettingController::class,'update'])
            ->name('settings.update');

// Route Resources Of Categories , Blogs , Employees , Banners , Advertisements , Pages

        Route::resources([
            'categories' => CategoryController::class,
            'blogs' => BlogController::class,
            'employees' => EmployeeController::class,
            'roles' => RoleController::class,
            'banners' => BannerController::class,
            'advertisements' => AdvertisementController::class,
            'pages' => PageController::class,

        ]);


    });
