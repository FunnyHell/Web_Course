<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Profile extends Model
{
    use HasFactory;

    public function add($name, $num, $pass, $sex)
    {
        DB::table('profiles')->insert(
            ['name' => $name, 'sex' => $sex, 'number' => $num, 'password' => $pass]);
    }

    public function authorization()
    {

    }

    public function updateinfo()
    {

    }

    private function take()
    {

    }
}
