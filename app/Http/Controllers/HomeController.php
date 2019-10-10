<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class HomeController extends Controller
{
    public function index() {
        $posts = Post::orderBy('id', 'desc')->take(3)->get()    ;
        return view('index')->with('posts', $posts);
    }
}
