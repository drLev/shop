<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;




 class ProductsController extends Controller
{
    public function index( $productsId = 0 ) {
        $products = Post::find($productsId);
        return view('products')
         ->with(['products' => $products]);
    }    	    
 }
	