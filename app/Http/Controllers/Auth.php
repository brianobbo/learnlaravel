<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Auth extends Controller
{
    //

    function getDataSession(Request $req)
    {
        $data = $req->input();
        $req->session()->put('user', $data['username']);  
        // echo session('user');
        return redirect('/');
        
    }
}
