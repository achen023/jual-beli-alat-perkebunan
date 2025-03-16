<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function index($id, $nama){
        return view('dashboard',['id' => $id, 'nama' => $nama]);
    }
}
