<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Dashboard extends Controller
{
    public function __invoke()
    {
        return view('dashboard');
    }
}
