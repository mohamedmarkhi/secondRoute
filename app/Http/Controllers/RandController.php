<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RandController extends Controller
{
    public function goldenNumber() {

        session_start();

        $N = rand(1, 10);

        if (isset($_SESSION['gb']) && $_SESSION['gb'] === true) {
            $message = "Deja Trouver Le Golden Number";
        } 
        else {
            if ($N === 9) {
                $message = "Golden number is $N and it's found";
                $_SESSION['gb'] = true;
            } else {
                $message = "Pas encore trouvé...";
            }
        }

        return view('GoldenNumber', ['Msg' => $message]);
    }
}
