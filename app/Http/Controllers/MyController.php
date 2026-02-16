<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function parController() {
        return view('homePage');
    }

    public function AnotherRoute () {
        return '<h1>Je suis dans controller par un autre chemin -DEV Another Route</h1>';
    }

    public function Aissa () {
        return view('Pricing');
    }
}   
