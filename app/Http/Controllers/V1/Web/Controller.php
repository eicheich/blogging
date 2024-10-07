<?php

namespace App\Http\Controllers\V1\Web;

abstract class Controller
{
    public function index()
    {
        return view('index');
    }
}
