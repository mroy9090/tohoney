<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Faq;
use App\Models\Product;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Models\Slider;
use PhpParser\Node\Stmt\Echo_;

class AdminController extends Controller
{
    //code begins here
    function start(){
        $category = Category::all();
        $product = Product::all();
        $testimonial = Testimonial::all();
        $slider = Slider::all();
        return view('index' , compact('category','product', 'testimonial', 'slider'));
    }
    function contact(){
        return view('contact');
    }
    function service()
    {
        return view('service');
    }
    function singleProduct($product_id){
        $category_id = Product::find($product_id)->category_id;
        $category_related_product = Product::where('category_id',$category_id)->where('id','!=',$product_id)->get();
        $product = Product::withTrashed()->find($product_id);
        $category_id = Product::withTrashed()->find($product_id)->category_id;
        $category_name = Category::withTrashed()->find($category_id)->category_name;
        $faq_data  = Faq::all();
        return view('single_product',compact('product', 'category_name', 'faq_data', 'category_related_product'));
    }
    function shop(){
        $product = Product::inRandomOrder()->get();
        $category_list = Category::all();
        return view('shop' , compact('product', 'category_list'));
    }
    function singleShop($category_id){
        $category_product = Product::where('category_id',$category_id)->get();
        return view('single_category',compact('category_product'));
    }
}
