<?php

use App\Http\Controllers\ContactsController;
use App\Http\Controllers\dashboard\ClassesController;
use App\Http\Controllers\dashboard\HomeController;
use App\Http\Controllers\dashboard\MessagesController;
use App\Http\Controllers\dashboard\ProgrammesController;
use App\Http\Controllers\dashboard\TodosController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


//----------------------------------------Authentication----------------------------------------//
//Only guests can go to these pages
Route::get('/register', [RegistrationController::class, 'create'])->middleware('guest');
Route::post('/register', [RegistrationController::class, 'store'])->middleware('guest');

Route::get('/login', [LoginController::class, 'create'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'login'])->middleware('guest')->name('loginPost');


//auth routes
Route::middleware(['auth'])->group(function () {

    //--Home Section-------
    Route::get('/dashboard', [HomeController::class, 'index']);
    Route::post('/event-interaction', [HomeController::class, 'eventInteraction']);
    Route::post('/dashboard/cancel', [HomeController::class, 'cancel']);

    Route::get('/dashboard/pay', [PaymentController::class, 'show']);
    Route::post('/dashboard/pay', [PaymentController::class, 'stripePost'])->name('stripePost');

    //--programmes section-----
    Route::get('/dashboard/programmes', [ProgrammesController::class, 'index']);

    //--classes section-----
    Route::get('/dashboard/classes', [ClassesController::class, 'index']);
    Route::get('/dashboard/classes/getAll', [ClassesController::class, 'getAll']);
    Route::post('/dashboard/classes/getClassByDate', [ClassesController::class, 'getClassByDate']);
    Route::post('/dashboard/classes/bookClass', [ClassesController::class, 'bookClass']);

    //--todos section-----
    Route::get('/dashboard/todos', [TodosController::class, 'index']);

    //---chat section-----
    Route::get('/dashboard/chat', [MessagesController::class, 'index']);
    Route::get('/contacts', [ContactsController::class, 'get']);
    Route::get('/conversation/{id}', [ContactsController::class, 'getMessagesFor']);
    Route::post('/conversation/send', [ContactsController::class, 'send']);

});



