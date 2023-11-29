<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|

/*
Route::get('/', function () {
    return view('home');
});


Route::get('/', function () {
    return inertia::render('create',[
        'name'=>'abderrahmane'
    ]);
});
*/
//Route::get ('/',[MailController::class,'mailform']);

Route::get('/', function () {
    return view('home');
});

Route::post('/contact/submit', [\App\Http\Controllers\ContactController::class, 'submit']);

//Route::get('/inertia', function () {
  //  return inertia::render('create');
//});
/*
Route::get('/', function () {
    return inertia::render('home');
});
*/
Route::get('/cv', function () {
    return view('cv');
});
Route::post('/cv',[ContactController::class,'send'])->name('contact.send');
