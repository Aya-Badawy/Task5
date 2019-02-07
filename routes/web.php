<?php

Route::get('/ad_dashboard','dashboardController@info');

Route::get('/welcome',function(){
       return view('messages');
});

Route::post('/new','newuserController@valid');
