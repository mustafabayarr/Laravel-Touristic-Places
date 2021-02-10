<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Places;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($places_id)
    {
        // $images = DB::table('places')->get();
        $image = Places::find($places_id);

        //$images_list = Image::all();
        $images_list = DB::table('images')->where('places_id', $places_id)->get(); //places id si  image 'id' olan
        return view('front.user_places_image_add',['image'=>$image,'images_list'=>$images_list]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$places_id)
    {
        $image_add= new Image;
        $image_add->places_id =$places_id;
        $image_add->title = $request->input('title');
        $image_add->image = Storage::putFile('images', $request->file('image'));
        $image_add->save();
        return redirect()->route('user_image_create',['places_id' => $places_id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function show(Image $image)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function edit(Image $image)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Image $image)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function destroy(Image $image,$id,$places_id)
    {
        $image = Image::find($id);
        $image->delete();
        // DB::table('images')->where('id', '=', $id)->delete();
        return redirect()->route('user_image_create',['id' => $id,'places_id' => $places_id]);
    }
}
