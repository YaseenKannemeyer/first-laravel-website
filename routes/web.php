<?php

use Illuminate\Support\Facades\Route;


//get route example
Route::get('/', function () {
    return view('home');
});


Route::get('/contact', function () {
    return view('contact');
});

//parameter route example
Route::get('/portfolio/{firstname}/{lastname}', function ($firstname, $lastname) {
    return $firstname . " " . $lastname;
});


//named route example
Route::get('/test', function () {
    return "This is a test";
})->name("testpage");



//grouped routes 

Route::get('/portfolio', function () {
    return view('portfolio');
});

Route::prefix("portfolio")->group(function () {
    Route::get('/company', function () {
        return view('company');
    });

    Route::get('/organization', function () {
        return view('organization');
    });
});



