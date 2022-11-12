<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Product extends Model
{
    use HasFactory;

    public function GetProducts($page)
    {
        $left = ($page - 1) * 1;
        $right = $page * 15;
        return DB::table('products')->where('id', '>=', $left)->where('id', '<=', $right)->get();
    }

    public function GetProduct($id){
        return DB::table('products')->find($id);
    }
}
