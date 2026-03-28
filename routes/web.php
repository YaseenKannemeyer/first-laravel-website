<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use Illuminate\Http\Request;

//get route example
Route::get('/', function () {
    return view('home');
});

//POSt route example
Route::post("/formsubmitted", function(Request $request){
    $request->validate([
        "name" => "required|min:3|max:30",
        "email" => "required|email|min:10|max:50"
    ]);
    $fullname = $request->input("name");
    $email = $request->input("email");
    return "Form submitted successfully. Full Name: " . $fullname . ", Email: " . $email;
})->name("formsubmitted");


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

Route::resource('posts', PostController::class);



