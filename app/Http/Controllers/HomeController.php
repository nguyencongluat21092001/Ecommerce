<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function listproduct()
    {
        $product = Product::with('productcategory')->get();

        return view('dashboard.listproduct',compact('product'));
    }

    public function product(){
        $AllProducts = Product::with('productcategory')->get();
        return view('front.product',compact('AllProducts'));
    }







    //blog
    public function listblog(){
        $blogs = Blog::all();
        return view("dashboard.listBlog",compact('blogs'));
    }

    public function addblog(){
        return view('dashboard.addBlog');
    }
    public function storeproduct(Request $request){
        try{
            $request->validate([
                "title" => 'required',
                "image" =>'required|mimes:png,jpg,jpeg,csv,txt,pdf|max:2048',
                "content" =>'required',
            ]);
                $input = $request->all();
                if($request->hasFile('image'))
                {
                   $destination_path = 'public/images/blog';
                   $image = $request->file('image');
                   $image_name = $image->getClientOriginalName();
                   $path = $request->file('image')->storeAs($destination_path,$image_name);
                   $input['image'] = $image_name;
                }
            Blog::create($input);
            return redirect()->route('post.blog');
        }catch(\Exception $ex){
            return back();
        }
    }



}
