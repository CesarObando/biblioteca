<?php

namespace gestorBiblioteca\Http\Controllers;

use Illuminate\Http\Request;
use gestorBiblioteca\Http\Requests;
use DB;

class LoginController extends Controller
{

  public function _construct(){
    $this->middleware('auth');
  }

  public function login()
  {
    return view ('login/login');
  }

}
