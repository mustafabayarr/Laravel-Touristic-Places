<?php

namespace App\Http\Controllers;



use App\Models\Category;

class HomeController extends Controller
{

    public static function categoryList(){
        return Category::where('parent_id', '=', 0)->with('children')->get();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        return view('front.homepage');
    }

    public function about(){
        return view('front.about');
    }

    public function categories(){
        return view('front.categories');
    }

    public function listing(){
        return view('front.listing');
    }

    public function contact(){
        return view('front.contact');
    }
    public function listing_details(){
        return view('front.listing_details');
    }




}
