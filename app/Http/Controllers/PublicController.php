<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Catalog;
use Illuminate\Support\Facades\Log;

class PublicController extends Controller

{

    public function homepage()

    {
        return view('layouts.home');
    }
 
    public function prodotti()

    {
        return view('prodotti');
    }
 
    public function chi_siamo()

    {
        return view('chi_siamo');
        
    }
 
    public function location()

    {
        return view('location');
        
    }
 
    public function login()

    {
        return view('login');
}

}

 
