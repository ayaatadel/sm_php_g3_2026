<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // get all data
        // $categories=Category::all();
        $categories = Category::orderBy('created_at', 'desc')->get();
        // var_dump($categories);
        return view('categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryRequest $request)
    {
        //
        //   dump($_POST);
        // dump($_REQUEST);
        // dd($request);
        // $name=$request['name'];
        // $deacription=$request['description'];
        // $requestData = $request->all();
        // $requestData=$request->except("_token");
//         $requestData=$request->validate(
// [
//     'name'=>'required|min:3|max:20|string|unique:categories,name',
//     'decription'=>'required|min:12|max:50|string'
// ],[
//    'name.required'=>'category name is required',
//    'name.unique'=>'category name is already exist',
//    'name.min'=>'category name must be at least 3 charcters',
//     'decription.required'=>'category decription is required',
//    'decription.min'=>'category description must be at least 12 charcters',
// ]
//         );

        // dump($requestData);
        $requestData=$request->validated();

        Category::create($requestData);
        return to_route('categories.index');
    }


    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // findOrFail ===> exit==> data || not exist : 404
        $category = Category::findOrFail($id);
        // var_dump($category);
        return view('categories.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $category = Category::findOrFail($id);

        return view('categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoryRequest $request, $id)
    // public function update(Request $request, $id)
    {
        //
        // dump($request);
        $category = Category::findOrFail($id); // get old data
        // $requestData = $request->all();  // get requested data
//         $requestData=$request->validate(
// [
//     'name'=>'required|min:3|max:20|string|unique:categories,name',
//     'decription'=>'required|min:12|max:50|string'
// ],[
//    'name.required'=>'category name is required',
//    'name.unique'=>'category name is already exist',
//    'name.min'=>'category name must be at least 3 charcters',
//     'decription.required'=>'category decription is required',
//    'decription.min'=>'category description must be at least 12 charcters',
// ]
//         );

$requestData=$request->validated();
        $category->update($requestData);
        return view('categories.show', compact('category'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $category = Category::findOrFail($id); // get old data
        $category->delete();
        return to_route('categories.index');
    }
}
