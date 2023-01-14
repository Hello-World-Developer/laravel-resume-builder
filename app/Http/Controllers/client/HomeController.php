<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function __invoke()
    {
        return redirect()->route('client.cv-form.create', ['new' => true]);
    }
}
