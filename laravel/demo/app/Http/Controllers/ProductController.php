<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products=Product::all();
    return view('products.index',compact('products'));
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request)
    {
        //
        $requestData=$request->validated();
                Product::create($requestData);
        return to_route('products.index');


    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product) // $product ==> all data product
    // public function show( $product)// id
    {
        // Product=Product $product ; // find or fail
        // $product == $Produc=Product::findOrFail()
        // dump($product);
        return view('products.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
        return view('products.edit',compact('product'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductRequest $request, Product $product)
    {
        //
        $requestData=$request->validated();
        $product->update($requestData);
        return view('products.show', compact('product'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
        $product->delete();
        return to_route('products.index');
    }
}
