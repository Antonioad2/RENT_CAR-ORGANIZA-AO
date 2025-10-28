<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\HomeController;
use App\Http\Controllers\Site\ReservationController;

/* Páginas principais e listagem de carros */

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/car-list', [HomeController::class, 'carList'])->name('site.car-list');
Route::get('/car/{car_id}', [HomeController::class, 'carDetails'])->name('car.details');
Route::get('/car/{car_id}/book', [HomeController::class, 'carBook'])->name('car.book');

/* Etapas da reserva */
Route::post('/reservation/step1/{car_id}', [ReservationController::class, 'step1'])
    ->name('site.reservation.step1');
Route::post('/reservation/step2/{car_id}', [ReservationController::class, 'step2'])
    ->name('site.reservation.step2');
Route::post('/reservation/step3/{car_id}', [ReservationController::class, 'step3'])
    ->name('site.reservation.step3');
Route::post('/reservation/confirm', [ReservationController::class, 'confirm'])
    ->name('site.reservation.confirm');

/* Checkouts (pode usar como atalhos ou redirecionamentos) */
Route::get('/reservation/checkout', [ReservationController::class, 'checkout'])
    ->name('site.reservation.checkout');

/* Página final */
Route::get('/car-confirmed/{id}', [HomeController::class, 'carConfirmed'])
    ->name('car.confirmed');


/* Rota para baixar pdf da reserva */
Route::get('/reservation/pdf/{id}', [ReservationController::class, 'generatePdf'])
    ->name('reservation.pdf');

    
//sobre nós
Route::view('/about-us', 'site.reservation.about.index')->name('site.about-us');

//blog
/* Route::view('/blog', 'site.reservation.blog.index')->name('site.blog'); */
Route::get('/blog', [HomeController::class, 'offers'])->name('site.blog');

//blog acessório
Route::get('/blog/accessory', [HomeController::class, 'accessory'])->name('site.blog-accessory');

//cliente criar e entrar
Route::view('/client/create', 'site.reservation.client.create.index')->name('site.client-create');
Route::post('/client-create', [HomeController::class, 'client_create'])->name('client_create');
/* login */
Route::view('/client/login', 'site.reservation.client.login.index')->name('site.client-login');
Route::post('/client-login', [HomeController::class, 'login'])->name('client_login');

/* logout */
/* DEVE SER POST ESTA ASSIM AINDA PARA TESTE */
Route::get('/client-logout', [HomeController::class, 'logout'])->name('client_logout');
