<?php


Route::get('/', function () {
    return view('welcome');
});

Route::get('/system/admin', function() {
  return view('admin');
});

Route::get('/system/create', 'MemberCtrl@create');

Route::post('/system/create', 'MemberCtrl@postCreate');

Route::get('/system/member/view', 'MemberCtrl@view');

Route::get('/system/deregister', 'MemberCtrl@delete');

Route::resource('/system', 'MemberCtrl');




Route::get('/system/scheduler', function() {
  return view('schedule');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
