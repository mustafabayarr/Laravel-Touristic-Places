<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    protected $appends = [
        'getParentsTree',
    ];
    public static function getParentsTree($category,$title){
        if($category->parent_id == 0){
            return $title;
        }
        $parent = Category::find($category->parent_id);
        $title = $parent->title . ' > ' . $title;
        return CategoryController::getParentsTree($parent,$title);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$category_list = DB::table('categories')->get();
        $category_list = Category::with('children')->get();
        return view('back.category', ['category_list' => $category_list]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add()
    {
       // $category_list = DB::table('categories')->where('parent_id', 0)->get();
        $category_list = Category::with('children')->get();
        return view('back.category_add', ['category_list' => $category_list]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @param \Illuminate\Http\Request $request
     * @return void
     */
    public function create(Request $request)
    {

        DB::table('categories')->insert([
            'parent_id' => $request->input('parent_id'),
            'title' => $request->input('title'),
            'slug' => $request->input('slug'),
            'keywords' => $request->input('keywords'),
            'description' => $request->input('description'),
            'status' => $request->input('status')
        ]);
        return redirect()->route('admin_category');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Category $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Category $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category, $id)
    {
        $category = Category::find($id);
        //$category_list = DB::table('categories')->where('parent_id', 0)->get();
        $category_list = Category::with('children')->get();
        return view('back.category_edit', ['category_list' => $category_list, 'category' => $category]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Category $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category,$id)
    {
        $category = Category::find($id);

        $category->parent_id = $request->input('parent_id');
        $category->title = $request->input('title');
        $category->slug = $request->input('slug');
        $category->keywords = $request->input('keywords');
        $category->description = $request->input('description');
        $category->status = $request->input('status');

        $category->save();
        return redirect()->route('admin_category');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Category $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category, $id)
    {
        DB::table('categories')->where('id', '=', $id)->delete();
        return redirect()->route('admin_category');

    }
}
