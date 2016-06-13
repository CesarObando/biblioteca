<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
use Session;
use PDF;

class PrincipalController extends Controller
{
  public function index()
  {
    return view ('index');
  }


}
