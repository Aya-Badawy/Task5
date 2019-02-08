<?php
//Auth::loginUsingId(2);
Route::get('/ad_dashboard','dashboardController@info')->middleware('auth');
Route::get('/user_dashboard','mangerDashboardController@index')->middleware('auth');
Route::get('/welcome',function(){
       return view('messages');
});

Route::post('/new','newuserController@valid')->middleware('auth');
Route::post('/inven','inventoryController@valid')->middleware('auth');
Route::post('/assigen','assigenMangerController@assigen')->middleware('auth');
Route::get('/view/{user}','userCrudController@view')->middleware('auth');
Route::get('/edit/{user}','userCrudController@edit')->middleware('auth');
Route::post('/update/{user}','userCrudController@update')->middleware('auth');
Route::get('/delete/{user}','userCrudController@delete')->middleware('auth');

Route::get('/view_in/{inv}','invCrudController@view')->middleware('auth');
Route::get('/edit_in/{inv}','invCrudController@edit')->middleware('auth');
Route::post('/update_in/{inv}','invCrudController@update')->middleware('auth');
Route::get('/delete_in/{inv}','invCrudController@delete')->middleware('auth');
Route::post('/login','loginController@authenticate');
Route::get('/login','loginController@login');
Route::get('/home','loginController@login');
Route::get('/','loginController@login');
Route::get('/logout', function(){
   Auth::logout();
   return Redirect::to('login');
});
