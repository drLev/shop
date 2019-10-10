<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;

class ProductdetailController extends Controller
{       
    public function index( $productsId = 0 ) {        
      /*  $products = Post::find($productsId);
        return view('productdetail')        
        ->with(['products' => $products]); */
        
        $products = Post::orderBy('id', 'desc')->take(3)->get()    ;
        return view('productdetail')->with('products', $products);
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
