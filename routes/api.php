<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::apiResource('/user','UserController');
Route::post('/login','UserController@login');
Route::apiResource('/event','EventController');
<<<<<<< HEAD
Route::apiResource('/ticket','TicketdescriptionController');
/*	Route::apiResource('/{event}/subevent','SubeventController');
});*/
=======
Route::apiResource('/ticketdescription','TicketdescriptionController');
Route::apiResource('/announcement','AnnouncementController');
>>>>>>> b84e96d2e9141ed81a532f2502b9d2a4614f59f9
