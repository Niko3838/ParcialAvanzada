<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LibroController extends Controller
{
    public function index()
	{
   	     return view('libro.libro');
 	}
	 public function reg_libros()
	 {
			 return view('libro.reg_libro');
	  }
}
