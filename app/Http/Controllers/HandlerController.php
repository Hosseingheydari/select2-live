<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HandlerController extends Controller
{
    public function index()
    {
        return view('index');
    }
}
