<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    //
    public function funcaoPrincipal() {
        return view('site.principal');
    }
}
