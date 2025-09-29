<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UtsConteroller extends Controller
{
    function index() {
        return view('uts');
    }
    function uts4() {
        return view('layouts.app');
    }
}
