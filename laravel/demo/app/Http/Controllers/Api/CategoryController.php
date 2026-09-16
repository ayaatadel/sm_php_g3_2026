<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
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
        //
        $categories = Category::all();
        return response()->json([
            "data" => $categories,
            "message" => "all categories returned successsfully"
        ]);
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryRequest $request)
    {
        //
        $requestedData =  $request->validated();
        Category::create($requestedData);
        return response()->json([

            "message" => "Category created successfully"
        ], 200);
    }

    /**
     * Display the specified resource.
     */
    // public function show(Category $category)
    // {
    //     //
    //      return response()->json([
    //     "data"=>$category,
    //     "message"=>"all categories returned successsfully"
    //     ]);
    // }
    public function show($category)
    {
        // هنبحث بنفسنا عن طريق الـ ID اللي جاي في الـ URL
        $categoryData = Category::find($category);

        if ($categoryData) {
            return response()->json([
                "data" => $categoryData,
                "message" => "Category returned successfully"
            ], 200);
        } else {
            return response()->json([
                "message" => "Category Not Found"
            ], 404);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoryRequest $request, Category $category)
    {
        //
          $requestedData =  $request->validated();
          $category->update($requestedData);
            return response()->json([
            "data" => $category,
            "message" => "updated successsfully"
        ]);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        //
        $category->delete();
        return response()->json([
            "data" => $category,
            "message" => "deleted successsfully"
        ]);
    }
}
