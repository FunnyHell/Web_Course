<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show()
    {
        return view('Registration');
    }

    public function saving(Request $request)
    {
        $profile = new Profile();
        dump($request);
        $answer = $profile->add($request->input('name'), $request->input('number'), $request->input('password'), $request->input('sex'), $request->input('date'));
        if ($answer == -1) return view('Error', ['code' => 1]);
        else return redirect('/profile/{id}');
    }

    public function authorization()
    {

    }

}
