<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Places;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PlacesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $places_list = DB::table('places')->get();

        return view('back.places', ['places_list' => $places_list]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $places_list = DB::table('categories')->get()->where('parent_id',0);
        return view('back.place_add', ['places_list' => $places_list]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('places')->insert([
            'category_id' => $request->input('category_id'),
            'title' => $request->input('title'),
            'slug' => $request->input('slug'),
            'keywords' => $request->input('keywords'),
            'description' => $request->input('description'),
            'image' => Storage::putFile('images', $request->file('image')),
            'details' => $request->input('details'),
            'city' => $request->input('city'),
            'country' => $request->input('country'),
            'location' => $request->input('location'),
            'user_id' => Auth::id(),
            'status' => $request->input('status')
        ]);
        return redirect()->route('admin_places');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Places  $places
     * @return \Illuminate\Http\Response
     */
    public function show(Places $places)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Places  $places
     * @return \Illuminate\Http\Response
     */
    public function edit(Places $places,$id)
    {
        $place = Places::find($id);
        $place_list = DB::table('categories')->get()->where('parent_id',0);
        return view('back.place_edit', ['place_list' => $place_list, 'place' => $place]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Places  $places
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Places $places,$id)
    {
        $place = Places::find($id);

        $place->category_id = $request->input('category_id');
        $place->title = $request->input('title');
        $place->slug = $request->input('slug');
        $place->keywords = $request->input('keywords');
        $place->description = $request->input('description');
        $place->details = $request->input('details');
        $place->city = $request->input('city');
        $place->country = $request->input('country');
        $place->location = $request->input('location');
        $place->user_id = Auth::id();
        $place->status = $request->input('status');
        $place->image = Storage::putFile('images', $request->file('image'));
        $place->save();
        return redirect()->route('admin_places');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Places  $places
     * @return \Illuminate\Http\Response
     */
    public function destroy(Places $places,$id)
    {
        DB::table('places')->where('id', '=', $id)->delete();
        return redirect()->route('admin_places');
    }
}
