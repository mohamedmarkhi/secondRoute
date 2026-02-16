<?php

use App\Http\Controllers\MyController;

use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});

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

Route::get('/percontroller', [MyController::class,'parController']); //controller with a route 

Route::get('/anotherRoute', [Mycontroller::class,'AnotherRoute']); //same controller with another route

Route::get('/golden', [Mycontroller::class,'GoldenNumber']); //same controller with another route

