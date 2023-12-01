<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LibreriaController extends Controller
{
    public function index()
	{
   	     return view('libreria.libreria');
 	}
}
