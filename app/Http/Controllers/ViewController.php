<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    function showForm() {
        return view('ets');
    }

    function phpHalSatu() {
        return view('prakphphal1');
    }

    function phpHalDua() {
        return view('prakphphal2');
    }
}
