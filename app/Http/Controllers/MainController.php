<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class MainController extends Controller
{
    public function show(){
        $Product = new Product();
        $post = $Product->GetProducts();
        dd($post);
        return view('MainPage', ['posts' => $post]);
    }
}
