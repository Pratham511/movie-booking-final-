<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\AddActorController;
use App\Http\Controllers\addTheatreController;

use App\Http\Controllers\AdminController;
use App\Models\theatre;
use Illuminate\Auth;



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

//  Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/signup', function () {
    return view('pages.customerSignup');
})->name('signup');

Route::get('/signin', function () {
    return view('pages.customerSignin');
})->name('signin');

Route::post('customerregister', [\App\Http\Controllers\CustomerController::class, 'store']);

Route::post('login', [\App\Http\Controllers\CustomerController::class, 'checkAuthUser']);

Route::get('index', [\App\Http\Controllers\CustomerController::class, 'index']);

Route::get('details/{id?}', [\App\Http\Controllers\AddActorController::class, 'details']);

Route::post('search', [\App\Http\Controllers\CustomerController::class, 'findMovie']);

Route::get('/book_tickets/{id?}', function () {
    return view('book_ticket');
});

Route::post('/book_tickets/ticketData', [\App\Http\Controllers\BookMovieController::class, 'store']);
Route::get('/ticketDetail', [\App\Http\Controllers\BookMovieController::class, 'display']);





Route::get('signout', [\App\Http\Controllers\CustomerController::class, 'signout'])->name('signout');




/*Route::get('/dashboard', function () {
    return view('index');
});*/
/*Route::get('/showtocustomer', function () {
    return view('customerhomepage');
})->name('showtocustomer');*/


/*--------------for admin route-------------------*/

Route::prefix('admin')->group(function () {
    Route::get('/signin', function () {
        return view('pages.adminSignin');
    });

    Route::get('/signup', function () {
        return view('pages.adminSignup');
    });

    Route::get('/dashboard', function () {
        return view('adminindex');
    });



    Route::post('/adminregister',[\App\Http\Controllers\AdminController::class,'store']);

    Route::post('/login',[\App\Http\Controllers\AdminController::class,'checkAuthAdmin']);


    //for movie-date route

    Route::get('/addmovie', function () {
        return view('add_movie_by_admin');
    });

    Route::post('/add',[\App\Http\Controllers\AddMovieController::class,'store']);
    Route::get('/index',[\App\Http\Controllers\AddMovieController::class,'index']);
    Route::get('/edit/{id}',[\App\Http\Controllers\AddMovieController::class,'edit']);
    Route::post('/update',[\App\Http\Controllers\AddMovieController::class,'update']);
    Route::get('/delete/{id}',[\App\Http\Controllers\AddMovieController::class,'destroy']);

    Route::get('/signout',[\App\Http\Controllers\AdminController::class,'signout'])->name('admin/signout');

    //for actor-data route

    Route::get('/addactor', function () {
        return view('add_actor_by_admin');
    });


    Route::post('/addActor',[\App\Http\Controllers\AddActorController::class,'store']);
    Route::get('/indexActor',[\App\Http\Controllers\AddActorController::class,'index']);
    Route::get('/editActor/{id}',[\App\Http\Controllers\AddActorController::class,'edit']);
    Route::post('/updateActor',[\App\Http\Controllers\AddActorController::class,'update']);
    Route::get('/deleteActor/{id}',[\App\Http\Controllers\AddActorController::class,'destroy']);

    Route::get('/showActor/{id}',[\App\Http\Controllers\AddActorController::class,'showActor']);


    //for theatre-data route

    Route::get('/addtheatre', function () {
        return view('add_theatre_by_admin');
    });

    Route::post('/addTheatre',[\App\Http\Controllers\addTheatreController::class,'store']);
    Route::get('/indexTheatre',[\App\Http\Controllers\addTheatreController::class,'index']);
    Route::get('/editTheatre/{id}',[\App\Http\Controllers\addTheatreController::class,'edit']);
    Route::post('/updateTheatre',[\App\Http\Controllers\addTheatreController::class,'update']);
    Route::get('/deleteTheatre/{id}',[\App\Http\Controllers\addTheatreController::class,'destroy']);

    Route::get('/showTheatre/{id}',[\App\Http\Controllers\AddTheatreController::class,'showTheatre']);

    Route::get('/viewBookingByAdmin', [\App\Http\Controllers\BookMovieController::class, 'index']);




});



