<?php

namespace App\Http\Controllers;



use App\Models\Category;
use App\Models\Messages;
use App\Models\Places;
use App\Models\Setting;
use Illuminate\Http\Request;


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
        $popular_locations = Places::select('id','title','image')->inRandomOrder()->limit(6)->get();
        $data = [
            'settings' => $settings,
            'popular_locations' => $popular_locations
        ];
        return view('front.homepage',$data);
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
    public function sendmessage(Request $request){
        $data = new Messages();
        $data->name = $request->input('name');
        $data->phone = $request->input('phone');
        $data->subject = $request->input('subject');
        $data->message = $request->input('message');
        $data->email = $request->input('email');
        $data->save();
        return redirect()->route('contact')->with('success','Message send successfully.');
    }
    public function references(){
        $settings = Setting::first();
        return view('front.references',['settings' => $settings]);
    }
    public function listing_details(){
        return view('front.listing_details');
    }
    public function category_places($id,$slug){
        $datalist= Places::where('category_id',$id)->get();
        $data = Category::find($id);
        return view('front.category_places',['datalist' => $datalist,'data' => $data]);
    }




}
