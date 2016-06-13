<?php

namespace gestorBiblioteca\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;

class Controller extends BaseController
{
    use AuthorizesRequests, AuthorizesResources, DispatchesJobs, ValidatesRequests;

    /*public function index()
    {
      return view('index');
    }*/

    public function login()
    {
      return view('login.login');
    }

    public function iniciarSesion(Request $request)
        {

        	 $nombreU=$_POST['nombreUsuario'];
        	 $contrasena=$_POST['contrasena'];

        	 if($nombreU=='admin'&&$contrasena=='admin')
        	 {

        	Session::put('admin', $nombreU);
    			Session::put('pass', $contrasena);
    			Session::put('success', 'success');
    			return Redirect::to('index');
        	 }
        	 return Redirect::to('login.login');
        }

        public function cerrarSesion(){
            Session::flush();
            return Redirect::to('login.login');
        }

}
