<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Models\Cert;
use App\Models\Partner;
use App\Models\Vacancy;
use Illuminate\Support\Facades\Route;

Route::get('/', function () { return view('information.index'); })->name('index');
Route::get('/dealers', function () { return view('information.dealers'); })->name('dealers');
Route::get('/vacancies', function () {
    $vacancies = Vacancy::all();

    return view('information.vacancies', compact('vacancies'));
})->name('vacancies');

Route::prefix('/production')->group(function () {
    Route::get('/', function () { return view('information.production'); })->name('production');

    Route::prefix('/products')->group(function () {
        Route::get('/aluminum', function () { return view('information.production.products.aluminum'); })->name('production.products.aluminum');
        Route::get('/glazing', function () { return view('information.production.products.glazing'); })->name('production.products.glazing');
        Route::get('/parts', function () { return view('information.production.products.parts'); })->name('production.products.parts');
        Route::get('/plastic', function () { return view('information.production.products.plastic'); })->name('production.products.plastic');
        Route::get('/solution', function () { return view('information.production.products.solution'); })->name('production.products.solution');
    });

    Route::prefix('/service')->group(function () {
        Route::get('/advices', function () { return view('information.production.service.advices'); })->name('production.service.advices');
        Route::get('/montage', function () { return view('information.production.service.montage'); })->name('production.service.montage');
        Route::get('/security', function () { return view('information.production.service.security'); })->name('production.service.security');
    });
});

Route::prefix('/about')->group(function () {
    Route::get('/', function () { return view('information.about'); })->name('about');

    Route::get('/projects', function () { return view('information.about.projects'); })->name('about.projects');

    Route::get('/certs', function () {
        $certs = Cert::all();

        return view('information.about.certs', compact('certs'));
    })->name('about.certs');

    Route::get('/partners', function () {
        $partners = Partner::all();

        return view('information.about.partners', compact('partners'));
    })->name('about.partners');

    Route::get('/contacts', function () { return view('information.about.contacts'); })->name('about.contacts');
});

Route::get('/login', [AuthController::class, 'loginView'])->name('auth.loginView');
Route::get('/register', [AuthController::class, 'registerView'])->name('auth.registerView');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [AuthController::class, 'profileView'])->name('auth.profileView');
});

