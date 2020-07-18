<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index()
    {
        $teste="<h1>Andre</h1>";
        $products=['Products 01','Products 02','Product 03'];

        return $teste;
    }
    public function show($id){
        return "Exibindo {$id}";
    }
    public function create(){
        return "Exibindo crud";
    }
}
