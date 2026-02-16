<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RandController extends Controller
{
    public function goldenNumber() {
        $N = rand(1, 10);

        if ($N === 9) {
            $message = "Golden number";
        } else {
            $message ="Pas encore trouvé...";
        }
        return view('GoldenNumber', ['Msg' => $message]);
    }
}
