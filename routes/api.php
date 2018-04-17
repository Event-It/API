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
Route::apiResource('/ticketdescription','TicketdescriptionController');
Route::apiResource('/announcement','AnnouncementController');
Route::group(['prefix'=>'event'],function(){
	Route::apiResource('/{event}/subevent','SubeventController');
});
=======
Route::apiResource('/ticket','TicketdescriptionController');
Route::apiResource('/{event}/subevent','SubeventController');
Route::apiResource('/ticketdescription','TicketdescriptionController');
Route::apiResource('/announcement','AnnouncementController');
>>>>>>> 6c54e886a019f7800b95e06c9160379e46b71ea2
