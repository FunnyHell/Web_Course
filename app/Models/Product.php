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
        return DB::table('products')->paginate(15);
    }

    public function GetProduct($id){
        return DB::table('products')->find($id);
    }
}
