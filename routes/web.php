<?php

Route::get('/ad_dashboard','dashboardController@info');
Route::get('/',function(){
       return view('welcome');
});

Route::post('/new','newuserController@valid');
