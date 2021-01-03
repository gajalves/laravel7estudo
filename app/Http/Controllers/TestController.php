<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function vaiCaralho() {
        return "<h1>Teste nessa porra</h1>";
    }

    public function passagemParametro(int $p1, int $p2) {
        echo "a soma dos parametros $p1 + $p2  é: ". ($p1 + $p2);
    }
}
