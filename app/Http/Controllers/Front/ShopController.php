<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductComment;
use App\Models\ProductDetail;
use App\Models\Blog;



class ShopController extends Controller
{
    //
    public function product(){
        $AllProducts = Product::with('productcategory')->get();
        return view('front.product',compact('AllProducts'));
    }

    public function showdetail($id){
        $detail = Product::with('productDetails')->findOrFail($id);

        $avgRating = 0;
        $sumRating = array_sum(array_column($detail->productComments->toArray(),'rating'));
        $countRating = count($detail->productComments);
        if($countRating !=0){
            $avgRating = $sumRating/$countRating;
        }

        return view('front.productdetail',compact('detail','avgRating'));
    }

    public function postComment(Request $request){
        ProductComment::create($request->all());

        return redirect()->back();
    }



    public function blog(){
        $blogs = Blog::all();
        $blogss = Blog::orderBy('id','desc')->limit(3)->get();
        return view('front.blog',compact('blogs','blogss'));
    }



}
