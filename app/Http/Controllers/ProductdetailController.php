<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;

class ProductdetailController extends Controller
{       
    public function index( $productsId = 0 ) {
        $product = Post::find($productsId);
        if (!$product) {
            abort(404);
        } else {
            return view('productdetail')
                ->with(['product' => $product]);
        }
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
