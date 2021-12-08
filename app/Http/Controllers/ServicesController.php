<?php

namespace App\Http\Controllers;
use App\Models\Services;
use App\Models\Soports;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    //

    public function index()
    {
   
    $servicios = Services::all();
    
  
    
    return view('welcome',compact('servicios'));
       
    }

    
}
