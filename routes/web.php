<?php

use App\Http\Controllers\MyController;
use App\Http\Controllers\RandController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CtrModules;

use Illuminate\Support\Facades\Route;



// image dans le header 
// menu de nav
// footer en bas 
 
// variables
// titre du metier
// img du metier
// desc du metier 


// Route::get('/', function () {
//     return view('homePage');
// });

Route::get('/', [HomeController::class, 'index']);

Route::get('/percontroller', [MyController::class,'parController']); //controller with a route 

Route::get('/anotherRoute', [Mycontroller::class,'AnotherRoute']); //same controller with another route

Route::get('/golden', [RandController::class,'goldenNumber']); //same controller with another route

Route::get('/welcome', function () {
    return view('welcome');
});

Route::resource('Produits', PostController::class);

Route::resource('AppModules', CtrModules::class);