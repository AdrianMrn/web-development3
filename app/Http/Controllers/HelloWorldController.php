<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloWorldController extends Controller
{
    public function getId($id) {

        return view('welcomeid', ['id'=>$id]);
    }
}
