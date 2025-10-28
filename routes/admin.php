<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ColorController;
use App\Http\Controllers\Admin\ModelsController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\FuelController;
use App\Http\Controllers\Admin\CarController;
use App\Http\Controllers\Admin\SupplierController;
use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\DriverController;
use App\Http\Controllers\Admin\ReserveController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Admin\CardController;
use App\Http\Controllers\Admin\OfferController;
use App\Http\Controllers\Admin\AccessoryController;
use App\Http\Controllers\Admin\SellController;                  


/*-------------------------------------------------------
                    color routes
-------------------------------------------------------*/

Route::prefix('/admin/colors')->name('colors.')->group(function () {
    Route::get('/', [ColorController::class, 'index'])->name('index');
    Route::get('/create', [ColorController::class, 'create'])->name('create');
    Route::post('/', [ColorController::class, 'store'])->name('store');
    Route::get('colorView/{color}', [ColorController::class, 'show'])->name('show');
    Route::get('colorEdit/{color}/edit', [ColorController::class, 'edit'])->name('edit');
    Route::put('/{color}', [ColorController::class, 'update'])->name('update');
    Route::get('/{color}', [ColorController::class, 'destroy'])->name('destroy');
    Route::get('/trashed', [ColorController::class, 'trashed'])->name('trashed');
    Route::post('/{color}/restore', [ColorController::class, 'restore'])->name('restore');
});

/*-------------------------------------------------------
                    modelos routes
-------------------------------------------------------*/

Route::prefix('/admin/models')->name('models.')->group(function () {
    Route::get('/', [ModelsController::class, 'index'])->name('index');
    Route::get('/create', [ModelsController::class, 'create'])->name('create');
    Route::post('/', [ModelsController::class, 'store'])->name('store');
    Route::get('modelView/{models}', [ModelsController::class, 'show'])->name('show');
    Route::get('modelEdit/{models}/edit', [ModelsController::class, 'edit'])->name('edit');
    Route::put('/{models}', [ModelsController::class, 'update'])->name('update');
    Route::get('/{models}', [ModelsController::class, 'destroy'])->name('destroy');
    Route::get('/trashed', [ModelsController::class, 'trashed'])->name('trashed');
    Route::post('/{models}/restore', [ModelsController::class, 'restore'])->name('restore');
});

/*-------------------------------------------------------
                    brand routes
-------------------------------------------------------*/

Route::prefix('/admin/brands')->name('brands.')->group(function () {
    Route::get('/', [BrandController::class, 'index'])->name('index');
    Route::get('/create', [BrandController::class, 'create'])->name('create');
    Route::post('/', [BrandController::class, 'store'])->name('store');
    Route::get('brandView/{brand}', [BrandController::class, 'show'])->name('show');
    Route::get('brandEdit/{brand}/edit', [BrandController::class, 'edit'])->name('edit');
    Route::put('/{brand}', [BrandController::class, 'update'])->name('update');
    Route::get('/{brand}', [BrandController::class, 'destroy'])->name('destroy');
    Route::get('/trashed', [BrandController::class, 'trashed'])->name('trashed');
    Route::post('/{brand}/restore', [BrandController::class, 'restore'])->name('restore');
});

/*-------------------------------------------------------
                    fuel routes
-------------------------------------------------------*/

Route::prefix('/admin/fuels')->name('fuels.')->group(function () {
    Route::get('/', [FuelController::class, 'index'])->name('index');
    Route::get('/create', [FuelController::class, 'create'])->name('create');
    Route::post('/', [FuelController::class, 'store'])->name('store');
    Route::get('fuelView/{fuel}', [FuelController::class, 'show'])->name('show');
    Route::get('fuelEdit/{fuel}/edit', [FuelController::class, 'edit'])->name('edit');
    Route::put('/{fuel}', [FuelController::class, 'update'])->name('update');
    Route::get('/{fuel}', [FuelController::class, 'destroy'])->name('destroy');
    Route::get('/trashed', [FuelController::class, 'trashed'])->name('trashed');
    Route::post('/{fuel}/restore', [FuelController::class, 'restore'])->name('restore');
});

/*-------------------------------------------------------
                    car routes
-------------------------------------------------------*/

Route::prefix('/admin/cars')->name('cars.')->group(function () {
    Route::get('/', [CarController::class, 'index'])->name('index');
    Route::get('/create', [CarController::class, 'create'])->name('create');
    Route::post('/', [CarController::class, 'store'])->name('store');
    Route::get('carView/{car}', [CarController::class, 'show'])->name('show');
    Route::get('carEdit/{car}/edit', [CarController::class, 'edit'])->name('edit');
    Route::put('/{car}', [CarController::class, 'update'])->name('update');
    Route::delete('/{car}', [CarController::class, 'destroy'])->name('destroy');
});

Route::get('/get-models-by-brand/{brandId}', [ModelsController::class, 'getModelsByBrand']);

/*-------------------------------------------------------
                    supplier routes
-------------------------------------------------------*/

Route::prefix('/admin/suppliers')->name('suppliers.')->group(function () {
    Route::get('/', [SupplierController::class, 'index'])->name('index');
    Route::get('/create', [SupplierController::class, 'create'])->name('create');
    Route::post('/', [SupplierController::class, 'store'])->name('store');
    Route::get('supplierView/{supplier}', [SupplierController::class, 'show'])->name('show');
    Route::get('supplierEdit/{supplier}/edit', [SupplierController::class, 'edit'])->name('edit');
    Route::put('/{supplier}', [SupplierController::class, 'update'])->name('update');
    Route::delete('/{supplier}', [SupplierController::class, 'destroy'])->name('destroy');
});

/*-------------------------------------------------------
                    client routes
-------------------------------------------------------*/

Route::prefix('/admin/clients')->name('clients.')->group(function () {
    Route::get('/', [ClientController::class, 'index'])->name('index');
    Route::get('/create', [ClientController::class, 'create'])->name('create');
    Route::post('/', [ClientController::class, 'store'])->name('store');
    Route::get('clientView/{client}', [ClientController::class, 'show'])->name('show');
    Route::get('clientEdit/{client}/edit', [ClientController::class, 'edit'])->name('edit');
    Route::put('/{client}', [ClientController::class, 'update'])->name('update');
    Route::delete('/{client}', [ClientController::class, 'destroy'])->name('destroy');
});

/*-------------------------------------------------------
                    card routes
-------------------------------------------------------*/

Route::prefix('/admin/cards')->name('cards.')->group(function () {
    Route::get('/', [CardController::class, 'index'])->name('index');
    Route::get('/create', [CardController::class, 'create'])->name('create');
    Route::post('/', [CardController::class, 'store'])->name('store');
    Route::get('clientView/{card}', [CardController::class, 'show'])->name('show');
    Route::get('cardEdit/{card}/edit', [CardController::class, 'edit'])->name('edit');
    Route::put('/{card}', [CardController::class, 'update'])->name('update');
    Route::delete('/{card}', [CardController::class, 'destroy'])->name('destroy');
});

/*-------------------------------------------------------
                    driver routes
-------------------------------------------------------*/

Route::prefix('/admin/drivers')->name('drivers.')->group(function () {
    Route::get('/', [DriverController::class, 'index'])->name('index');
    Route::get('/create', [DriverController::class, 'create'])->name('create');
    Route::post('/', [DriverController::class, 'store'])->name('store');
    Route::get('driverView/{driver}', [DriverController::class, 'show'])->name('show');
    Route::get('driverEdit/{driver}/edit', [DriverController::class, 'edit'])->name('edit');
    Route::put('/{driver}', [DriverController::class, 'update'])->name('update');
    Route::delete('/{driver}', [DriverController::class, 'destroy'])->name('destroy');
});

/*-------------------------------------------------------
                    reserve routes
-------------------------------------------------------*/

Route::prefix('/admin/reserves')->name('reserves.')->group(function () {
    Route::get('/', [ReserveController::class, 'index'])->name('index');
    Route::get('/create', [ReserveController::class, 'create'])->name('create');
    Route::post('/', [ReserveController::class, 'store'])->name('store');
    Route::get('reserveView/{id}', [ReserveController::class, 'show'])->name('show');
    Route::get('reserveEdit/{id}/edit', [ReserveController::class, 'edit'])->name('edit');
    Route::put('/{id}', [ReserveController::class, 'update'])->name('update');
    Route::delete('/{id}', [ReserveController::class, 'destroy'])->name('destroy');
});

/*-------------------------------------------------------
                    Dashboard routes
-------------------------------------------------------*/
Route::get('/admin/analytics', [DashboardController::class, 'analytics'])->name('analytics')->middleware('auth');
Route::get('/admin/reports/reportsSales', [DashboardController::class, 'reportsSales'])->name('reportsSales');
Route::get('/admin/reports/reportsLeads', [DashboardController::class, 'reportsLeads'])->name('reportsLeads');
Route::get('/admin/reports/reportsProject', [DashboardController::class, 'reportsProject'])->name('reportsProject');
Route::get('/admin/reports/reportsTimesheets', [DashboardController::class, 'reportsTimesheets'])->name('reportsTimesheets');


/*-----------------------------------------------------
                User routes
-------------------------------------------------------*/

Route::prefix('/admin/users')->name('users.')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('index');
    Route::get('/create', [UserController::class, 'create'])->name('create');
    Route::post('/', [UserController::class, 'store'])->name('store');
    Route::get('userView/{user}', [UserController::class, 'show'])->name('show');
    Route::get('userEdit/{user}/edit', [UserController::class, 'edit'])->name('edit');
    Route::put('/{user}', [UserController::class, 'update'])->name('update');
    Route::delete('/{user}', [UserController::class, 'destroy'])->name('destroy');
});

/*--------------------------------------------------------
                      Offers routes
--------------------------------------------------------*/
/* Route::prefix('/admin/offers')->name('offers.')->group(function () {
    Route::get('/', [OfferController::class, 'index'])->name('index');
    Route::get('/create', [OfferController::class, 'create'])->name('create');
    Route::post('/', [OfferController::class, 'store'])->name('store');
    Route::get('offerView/{offer}', [OfferController::class, 'show'])->name('show');
    Route::get('offerEdit/{offer}/edit', [OfferController::class, 'edit'])->name('edit');
    Route::put('/{offer}', [OfferController::class, 'update'])->name('update');
    Route::delete('/{offer}', [OfferController::class, 'destroy'])->name('destroy');
}); */

Route::prefix('/admin/sells')->name('sells.')->group(function () {
    Route::get('/', [SellController::class, 'index'])->name('index');
    Route::get('/create', [SellController::class, 'create'])->name('create');
    Route::post('/', [SellController::class, 'store'])->name('store');
    Route::get('sellView/{sell}', [SellController::class, 'show'])->name('show');
    Route::get('sellEdit/{sell}/edit', [SellController::class, 'edit'])->name('edit');
    Route::put('/{sell}', [SellController::class, 'update'])->name('update');
    Route::delete('/{sell}', [SellController::class, 'destroy'])->name('destroy');    
}); 

Route::prefix('/admin/accessories')->name('accessories.')->group(function () {
    Route::get('/', [AccessoryController::class, 'index'])->name('index');
    Route::get('/create', [AccessoryController::class, 'create'])->name('create');
    Route::post('/', [AccessoryController::class, 'store'])->name('store');
    Route::get('accessoryView/{accessory}', [AccessoryController::class, 'show'])->name('show');
    Route::get('accessoryEdit/{accessory}/edit', [AccessoryController::class, 'edit'])->name('edit');
    Route::put('/{accessory}', [AccessoryController::class, 'update'])->name('update');
    Route::delete('/{accessory}', [AccessoryController::class, 'destroy'])->name('destroy');    
});


Route::get('/admin', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');
/* Route::get('/admin/auth/login', [AuthController::class, 'login'])->name('admin.login'); //tela de login (acesso ao sistema administrativo)
Route::get('/admin/auth/create', [AuthController::class, 'create'])->name('admin.create');//tela de cadastro (criação de novo usuário(admin || user))
Route::get('/admin/auth/reset', [AuthController::class, 'reset'])->name('admin.reset');//tela de reset de senha (esqueci minha senha) inserir email
Route::get('/admin/auth/resetpassword', [AuthController::class, 'resetpassword'])->name('admin.resetpassword');//tela de reset de senha (esqueci minha senha) inserir nova senha

 */

/* Auth::routes();
Route::Redirect('/home', '/admin');

Route::get('/home', 'HomeController@index')->name('home'); 

Route::get('/home', function () {
    return redirect()->route('admin');
});
 */
Auth::routes();
Route::get('/home', function () {
    return redirect()->route('dashboard');
});
 Route::get('password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('password/reset', [ResetPasswordController::class, 'reset'])->name('password.update'); 