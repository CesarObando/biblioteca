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

<<<<<<< HEAD
=======


>>>>>>> 3ef61ea3e8c3c49a3d5853831d93055f65b89f27
    public function index()
    {
      return view('auth.login');
    }


}
