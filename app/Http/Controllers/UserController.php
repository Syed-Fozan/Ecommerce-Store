<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    function login(Request $req)
    {
    $usser = User::where(['email'=>$req->email])->first();
    if (!$usser ||!Hash::check($req->password, $usser->password))
    {
        return "password doesnot match";
    }
    else{
        $req->session()->put('user',$usser);
        return redirect('/');
    }
    }
}
