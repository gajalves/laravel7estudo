<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function vaiCaralho() {
        return "<h1>Teste nessa porra</h1>";
    }

    public function passagemParametro($p1, $p2) {
        //echo "a soma dos parametros $p1 + $p2  é: ". ($p1 + $p2);
        // return view("site.teste", [
        //     'p1' => $p1,
        //     'p2' => $p2
        // ]);
        return view("site.teste", compact('p1', 'p2')); 
    }
}
