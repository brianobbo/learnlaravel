<?php

namespace App\Http\Controllers; 
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


## This is used to fetch data without Model -> only using controller
// use Illuminate\Support\Facades\DB;


class Users extends Controller
{
    // 
    function index(/*$name*/)
    {
        // echo $user;
        // echo ": Hello";

        //using controller as an api
        // return(['name' => "Brian", 'age' => 27]);

        // $data = ["Brian", "Sam", "Petr"];

        // return view('user', ['users'=> $data]);


        ### This is used to fetch data without Model -> only using controller
        //return DB::select("select * from users");


        ### ## This is used to fetch data with Model
        // return User::all();

        // Laravel Http client
        # $collection =  Http::get("https://reqres.in/api/users?page=1");
        # return view('user', ['collection'=> $collection['data']]);



        
    }


    function getData(Request $req)
    {
        # Form Validation
        $req->validate([
            'username' => 'required | max: 10',
            'password' => 'required | min: 5'
        ]);
        return $req->input();
    }
    


    // Http Request method
    function testRequest(Request $req)
    {
        return $req->input();
    }



    function addMember(Request $req)
    {
        $data = $req->input('username');
        $req->session()->flash($data);
        return redirect('user');

    }

}
