<?php

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

//Auth::routes();//Removed auth routes for now

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('senders', 'Senderscontroller');
Route::get('/sender/register', 'Senderscontroller@register');//Pass location variables
Route::get('/sender/login', 'Senderscontroller@login')->name('senders.login');//Pass location variables
Route::post('/sender/home', 'Senderscontroller@home')->name('senders.home');//Pass location variables

Route::resource('couriers', 'CouriersController');
Route::get('/courier/register', 'CouriersController@register');//Pass location variables
Route::get('/courier/login', 'CouriersController@login')->name('couriers.login');//Pass location variables
Route::post('/courier/home', 'CouriersController@home')->name('couriers.home');//Pass location variables


//Route::get('/senders/register', 'Senderscontroller@register');

// Route::prefix('sender')->group(function () {
//     Route::get('register', function () {
//         // Matches The "/admin/users" URL
//         echo "admin";
//     });
// });
