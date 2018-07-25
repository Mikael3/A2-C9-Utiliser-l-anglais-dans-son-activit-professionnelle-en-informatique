<?php

namespace App\Http\Controllers;

use Request;

class welcome extends Controller
{
    public function index()
    {
        return view("/welcome");
    }
}
