<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Profile extends Model
{
    use HasFactory;

    public function add($name, $num, $pass, $sex, $date)
    {
        if ($sex == 'none') $sex = NULL;
        else if ($sex == 'male') $sex = 1;
        else $sex = 0;
        try {
            DB::table('profiles')->insert(
                ['name' => $name, 'sex' => $sex, 'number' => $num, 'password' => $pass, 'date of birth' => $date]);
        } catch (Exception $e) {
            return -1;
        }
    }

    public
    function authorization()
    {

    }

    public
    function updateinfo()
    {

    }

    private
    function take()
    {

    }
}
