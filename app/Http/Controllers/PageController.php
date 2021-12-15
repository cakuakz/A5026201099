<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{

    public function index() {
       DB::table('pagecounter')->increment('Jumlah');
        $pagecounter = DB::table('pagecounter')->get();
        return view('layout.bahagia', ['pagecounter' => $pagecounter]);
    }
}
