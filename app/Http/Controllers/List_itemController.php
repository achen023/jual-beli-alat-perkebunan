<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class List_itemController extends Controller
{
    function index($id, $nama){
        return view('list_item',['id' => $id, 'nama' => $nama]);
    }
}
