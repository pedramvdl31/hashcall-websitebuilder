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
// Route::post('/api/del-comment',  ['uses' => 'ApisController@postDelComment']);
// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',  ['uses' => 'HomeController@getIndex']);
Route::get('/LandingPage/',  ['uses' => 'HomeController@getLandingPage']);
Route::get('/FullWidthPics/',  ['uses' => 'HomeController@getFullWidthPics']);
Route::get('/freelancer/',  ['uses' => 'HomeController@getFreelancer']);
Route::get('/agencyl/',  ['uses' => 'HomeController@getAgency']);

