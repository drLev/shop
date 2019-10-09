<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;

class ProductdetailController extends Controller
{
    public function index() {
        return view('productdetail');
    }
    
    public function addComment(Request $request) {
        $data = $request->all();
        
        $comment = new Comment();
        $comment->text = $data['text'];
        $comment->post_id = $data['postId'];
        $comment->save();
        
        return response()->json($comment);
    }
}
