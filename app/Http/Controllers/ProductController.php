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
        return view('ProductPage', ['prod' => $post]);
    }

    public function addToHistory(Request $request)
    {
        $Product = new Product();
        $Product->addToHistory($request['user'], $request['product']);
        return (redirect('/home'));
    }
    public function add(Request $request)
    {
        $Product = new Product();
        $checker = $Product->add($request);
        if ($checker == 0) return view('Error', ['code' => 0]);
        if ($checker == -1) return view('Error', ['code' => -1]);
        return (redirect('/'));
    }
}
