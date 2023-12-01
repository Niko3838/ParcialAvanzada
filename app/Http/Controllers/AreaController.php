<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AreaController extends Controller
{
    public function index()
	{
   	     return view('area.area');
 	}
    public function reg_areas()
     {
             return view('area.reg_area');
      }
}
