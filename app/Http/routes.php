<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/profilePage', 'PagesController@getProfilePage');

Route::post('/profilePage/updateProfilePicture', 'PagesController@updateProfilePicture');


Route::post('/profilePage/updateProfileInformation', 'PagesController@updateProfileInformation');



Route::get('/profilePage', 'PagesController@getProfilePage');


/*
Route::post('/profilePage/updateProfileInformation}',  ['as' => 'profilePage.getProfilePage', 'uses' => 'PagesController@getProfilePage']);
*/
Route::patch('/profilePage/updateProfileInformation/',  ['as' => 'profilePage.update', 'uses' => 'PagesController@updateProfileInformation']);