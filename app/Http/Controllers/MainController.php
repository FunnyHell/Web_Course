<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class MainController extends Controller
{
    public function show(){
        $post = Product::find(1)->title;
        var_dump($post);
        return view('MainPage', ['post' => $post]);
    }
}
