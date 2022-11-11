<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class MainController extends Controller
{
    public function show(){
        $prod = new Product();
        $post = $prod->GetProducts(1);
        dump($post[0]->image);
        return view('MainPage', ['post' => $post]);
    }
}
