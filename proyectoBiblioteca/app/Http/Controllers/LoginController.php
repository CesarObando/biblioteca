<?php

namespace gestorBiblioteca\Http\Controllers;

use Illuminate\Http\Request;
use gestorBiblioteca\Http\Requests;
use gestorBiblioteca\Libro;
use DB;
use PDF;
use Session;

class LoginController extends Controller
{

  public function iniciarSesion(Request $request)
      {

      	 $nombreU=$_POST['nombreUsario'];
      	 $contrasena=$_POST['contrasena'];

      	 if($nombreU=='admin'&&$contrasena=='admin')
      	 {

      	Session::put('admin', $nombreU);
  			Session::put('pass', $contrasena);
  			Session::put('success', 'success');
  			return Redirect::to('/inicioAdmin');
      	 }
      	 return Redirect::to('login');
      }

      public function cerrarSesion(){
          Session::flush();
          return Redirect::to('login');
      }

}
