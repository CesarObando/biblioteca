<?php

namespace gestorBiblioteca\Http\Controllers;

use Illuminate\Http\Request;
use gestorBiblioteca\Http\Requests;
use DB;

class LoginController extends Controller
{
  public function login()
  {
    return view ('login/login');
  }

}
