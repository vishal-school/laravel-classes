<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BusinessmanController;

/*
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
    return view('welcome');
});

Route::get('/okok', function () {
    return "not ok not ok";
    return view('welcome');
});

Route::get('/okok', function () {
    return "not ok  not ok not ok";
    return view('welcome');
});

Route::get('/ok', function () {
    return view('businessman-detail-insert');
});

Route::get('/insert-business', function () {
    return view('businessman-detail-insert');
})->name('profile');


Route::get('/create', [BusinessmanController::class, 'createfirst']); 

Route::get('/businessman-detail-view', [BusinessmanController::class, 'index']);


Route::get('/view-id/{id?} ', [BusinessmanController::class, 'viewok']); 

Route::get('/view-view/{id?}/phone', [BusinessmanController::class, 'viewview'])->name('view2');; 

Route::get('/view3', function () {
    return view('view');
});


Route::redirect('/view10', '/welcome');


Route::get('many/{name}', function ($name) {
    return " ok .$name"; 
})->where('name', '[A-Za-z]+');
 
Route::get('any/{id}', function ($id) {
    return " ok .$id"; 
})->where('id', '[0-9]+');
 
Route::get('anyview/{id}/{name}', function ($id, $name) {
    return " ok .$id 
     $name"; 
})->where(['id' => '[0-9]+', 'name' => '[a-z]+']);

Route::get('age/{age}', function ($age) {
    return "ok php ";
});
Route::get('age/{age} ', [BusinessmanController::class, 'ageage']); 