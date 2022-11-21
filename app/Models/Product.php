<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\File;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class Product extends Model
{
    use HasFactory;

    public function GetProducts()
    {
        $res = DB::table('products')->paginate(15);
        $res->withPath('/');
        return $res;
    }

    public function GetProduct($id)
    {
        return DB::table('products')->find($id);
    }

    public function add($req)
    {
        if ($req->input('name')) $name = $req->input('name');
        else return 0;
        if ($req->input('description')) $description = $req->input('description');
        else $description = NULL;
        if ($req->input('cost')) $cost = $req->input('cost');
        else return 0;
        if ($req->file('img') != null) {
            $img = $req->file('img');
            $filename = $req->file('img')->getClientOriginalName();
            if (!$this->imageChecker($filename)) {
                return -1;
            }
            $url = Storage::disk('public')->put('/img', $img);
            DB::table('products')->insert(['title' => $name, 'cost' => $cost, 'description' => $description, 'image' => '/' . $url]);
            return 1;
        } else {
            DB::table('products')->insert(['title' => $name, 'cost' => $cost, 'description' => $description, 'image' => '/img/placeholder.png']);
            return 1;
        }
    }

    public function addToHistory($user, $prod)
    {
        return DB::table('buying_history')->insert(['user_id' => $user, 'product_id' => $prod]);
    }

    private function imageChecker($img)
    {
        $imageExtensions = ['jpg', 'jpeg', 'gif', 'png', 'bmp', 'svg', 'svgz', 'cgm', 'djv', 'djvu', 'ico', 'ief', 'jpe', 'pbm', 'pgm', 'pnm', 'ppm', 'ras', 'rgb', 'tif', 'tiff', 'wbmp', 'xbm', 'xpm', 'xwd'];

        $explodeImage = explode('.', $img);
        $extension = end($explodeImage);

        if (in_array($extension, $imageExtensions)) {
            return $extension;
        } else {
            return 0;
        }
    }

    public function ShowHistory(){
        $history = DB::table('buying_history')->where('user_id', '=', auth()->user()->id)->get('product_id')->toArray();
        $arr = array();
        foreach ($history as $item) {
            array_push($arr, $item->product_id);
        }
        $db = collect();
        foreach ($arr as $item){
            $db->push(DB::table('products')->where('id', '=', $item)->get());
        }
        return $db;
    }
}
