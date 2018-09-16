<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function new()
    {
        var_dump('this is a dump');
        return view('new');
    }
}
