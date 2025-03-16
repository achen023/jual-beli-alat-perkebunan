<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    function index($id, $nama){
        return view('login',['id' => $id, 'nama' => $nama]);
    }
}
