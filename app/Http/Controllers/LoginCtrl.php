<?php

namespace hilda\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;

class LoginCtrl extends Controller
{
  public function login(Request $request) {

    $user = Sentinel::forceAuthenticate($request->all());

    try {
      if(Sentinel::getUser()->roles()->first()->slug == 'admin'){
        return redirect('/system/admin');
      } elseif (Sentinel::getUser()->roles()->first()->slug == 'clerk') {
        return redirect('/system/create');
      } else {
        return redirect('/');
      }
    } catch (Exception $e) {
      return $e;
    }


  }

  public function logout() {
    Sentinel::logout();

    return redirect('/');
  }
}
