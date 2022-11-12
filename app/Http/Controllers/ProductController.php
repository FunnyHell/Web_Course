<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function show($id)
    {
        $Product = new Product();
        $post = $Product->GetProduct($id);
        dump($post);
        return view('ProductPage', ['prod' => $post]);
    }
}
