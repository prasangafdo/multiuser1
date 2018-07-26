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
Route::get('/register', 'Senderscontroller@register');//Pass location variables
Route::get('/login', 'Senderscontroller@login');//Pass location variables
Route::post('/log', 'Senderscontroller@log')->name('senders.log');//Pass location variables

//Route::get('/senders/register', 'Senderscontroller@register');

// Route::prefix('senders')->group(function () {
//     Route::get('register', function () {
//         // Matches The "/admin/users" URL
//       //  Route::get('/senders/register', 'Senderscontroller@register');   
//       echo "Register";    
//     });
// });

Route::prefix('sender')->group(function () {
    Route::get('register', function () {
        // Matches The "/admin/users" URL
        echo "admin";
    });
});
