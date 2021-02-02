<?php

namespace App\Http\Controllers;



use App\Models\Category;
use App\Models\Setting;

class HomeController extends Controller
{

    public static function categoryList(){
        return Category::where('parent_id', '=', 0)->with('children')->get();
    }
    public static function getSetting(){
        return Setting::first();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $settings = Setting::first();
        return view('front.homepage',['settings' => $settings]);
    }

    public function about(){
        $settings = Setting::first();
        return view('front.about',['settings' => $settings]);
    }

    public function categories(){
        return view('front.categories');
    }

    public function listing(){
        return view('front.listing');
    }

    public function contact(){
        $settings = Setting::first();
        return view('front.contact',['settings' => $settings]);
    }
    public function references(){
        $settings = Setting::first();
        return view('front.references',['settings' => $settings]);
    }
    public function listing_details(){
        return view('front.listing_details');
    }




}
