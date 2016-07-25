<?php


Route::get('/', function () {
    return view('welcome');
});


// auth routes

Route::post('/postregister', 'RegisterCtrl@postRegister');

Route::post('/login', 'LoginCtrl@login');

Route::post('/logout', 'LoginCtrl@logout');

// end auth routes



Route::get('/system/admin', function() {
  return view('admin.admindash');
});

Route::get('/system/members', function() {
  return view('admin.members.members');
});

Route::get('/system/reminders', function() {
  return view('admin.reminders.reminders');
});

Route::get('/system/reminders/dl', function() {
  return view('admin.reminders.dlrem');
});

Route::get('/system/create', 'MemberCtrl@create');

Route::post('/system/create', 'MemberCtrl@postCreate');

Route::get('/system/{id}/edit', 'MemberCtrl@edit');

Route::put('/system/{id}/edit', 'MemberCtrl@update');

Route::delete('/system/{id}/delete', 'MemberCtrl@destroy');

Route::get('/system/member/view', 'MemberCtrl@view');

Route::get('/system/deregister', 'MemberCtrl@delete');

// Route::resource('/system', 'MemberCtrl');




Route::get('/system/scheduler', function() {
  return view('schedule');
});
