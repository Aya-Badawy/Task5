<?php
Auth::loginUsingId(3);
Route::get('/ad_dashboard','dashboardController@info');

Route::get('/welcome',function(){
       return view('messages');
});

Route::post('/new','newuserController@valid');
Route::post('/inven','inventoryController@valid');
Route::post('/assigen','assigenMangerController@assigen');
Route::get('/view/{user}','userCrudController@view');
Route::get('/edit/{user}','userCrudController@edit');
Route::post('/update/{user}','userCrudController@update');
Route::get('/delete/{user}','userCrudController@delete');
