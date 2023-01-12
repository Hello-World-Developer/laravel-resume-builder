<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function __invoke()
    {
        session()->forget('cv-info');
        return view('pages.client.index');
    }
}
