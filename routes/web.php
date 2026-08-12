<?php

<<<<<<< HEAD
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
=======
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ManageController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\TestController;
use App\Models\Certificate;
use App\Models\Job;
use App\Models\Partner;
use App\Models\Project;
use Illuminate\Support\Facades\Route;

Route::get('/', function () { return view('information.index'); })->name('information.index');
Route::get('/dealers', function () { return view('information.dealers'); })->name('information.dealers');
Route::get('/vacancies', function () {
    $jobs = Job::where('is_free', true)->get();

    return view('information.vacancies', compact('jobs'));
})->name('information.vacancies');

Route::prefix('/production')->group(function () {
    Route::get('/', function () { return view('information.production'); })->name('information.production');

    Route::prefix('/products')->group(function () {
        Route::get('/aluminum', function () { return view('information.production.products.aluminum'); })->name('information.production.products.aluminum');
        Route::get('/glazing', function () { return view('information.production.products.glazing'); })->name('information.production.products.glazing');
        Route::get('/parts', function () { return view('information.production.products.parts'); })->name('information.production.products.parts');
        Route::get('/plastic', function () { return view('information.production.products.plastic'); })->name('information.production.products.plastic');
        Route::get('/solution', function () { return view('information.production.products.solution'); })->name('information.production.products.solution');
    });

    Route::prefix('/service')->group(function () {
        Route::get('/advices', function () { return view('information.production.service.advices'); })->name('information.production.service.advices');
        Route::get('/montage', function () { return view('information.production.service.montage'); })->name('information.production.service.montage');
        Route::get('/security', function () { return view('information.production.service.security'); })->name('information.production.service.security');
    });
});

Route::prefix('/about')->group(function () {
    Route::get('/', function () { return view('information.about'); })->name('information.about');

    Route::get('/projects', function () {
        $projects = Project::all();

        return view('information.about.projects', compact('projects'));
    })->name('information.about.projects');

    Route::get('/certs', function () {
        $certificates = Certificate::all();

        return view('information.about.certs', compact('certificates'));
    })->name('information.about.certificates');

    Route::get('/partners', function () {
        $partners = Partner::all();

        return view('information.about.partners', compact('partners'));
    })->name('information.about.partners');

    Route::get('/contacts', function () { return view('information.about.contacts'); })->name('information.about.contacts');
});

Route::get('/login', [AuthController::class, 'loginView'])->name('system.auth.loginView');
Route::get('/register', [AuthController::class, 'registerView'])->name('system.auth.registerView');

Route::post('/login', [AuthController::class, 'login'])->name('system.auth.login');
Route::post('/register', [AuthController::class, 'register'])->name('system.auth.register');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [ManageController::class, 'dashboardView'])->name('system.manage.dashboardView');
    Route::get('/orders', [ManageController::class, 'ordersView'])->name('system.manage.ordersView');
    Route::get('/profile', [ManageController::class, 'profileView'])->name('system.manage.profileView');

    Route::get('/logout', [AuthController::class, 'logout'])->name('system.manage.logout');

    Route::patch('/info', [ManageController::class, 'changePersonalInformation'])->name('system.manage.changePersonalInformation');
    Route::patch('/pass', [ManageController::class, 'changePassword'])->name('system.manage.changePassword');

    Route::post('/orders', [OrderController::class, 'create'])->name('system.orders.create');
    Route::patch('/orders/{id}', [OrderController::class, 'update'])->name('system.orders.update');
    Route::delete('/orders/{id}', [OrderController::class, 'delete'])->name('system.orders.delete');
});

>>>>>>> 65a6a6386df3e72542fe014458e036af01f8b9f6
