<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class AbouthController extends Controller
{
    public function index() {
        return view('about');
    }
}
