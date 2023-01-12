<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function __invoke()
    {   
        return view('pages.client.index');
    }
}
