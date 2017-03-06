<?php

namespace App\Http\Controllers;

class WebController
{

    public function index()
    {
        return view('minesweeper');
    }

    public function astroport()
    {
        return view('astroport');
    }
}
