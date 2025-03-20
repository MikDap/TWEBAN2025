<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Prod;
use Illuminate\Http\Request;

class ProdController extends Controller{
public function index(){
    
    $prod = Prod::all(); // Recupera tutti i prodotti
    return view('layouts.catalogo_prod', compact('prod'));
}
}