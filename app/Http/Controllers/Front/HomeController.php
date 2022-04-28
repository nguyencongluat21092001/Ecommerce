<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Blog;
use App\Models\Brand;

class HomeController extends Controller
{
    //
    public function index()
    {
        $menProducts = Product::with('productcategory')->where('featured',true)->where('product_category_id',1)->get();
        $womenProducts =Product::with('productcategory')->where('featured',true)->where('product_category_id',2)->get();
        // dd($menProducts);
        $blogs = Blog::orderBy('id','desc')->limit(3)->get();
        return view('front.index',compact('menProducts','womenProducts','blogs'));
    }
}
