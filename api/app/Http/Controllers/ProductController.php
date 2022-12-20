<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use GuzzleHttp\Psr7\Request;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::all();
        return $products;
    }



    public function store(Request $request)
    {
        $product = new Product();
        $product->description = $request->description;
        $product->price = $request->price;
        $product->stock = $request->stock;

        $product->save();
    }


    public function show($id)
    {
        $product = Product::find($id);
        return $product;
    }


    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($request->id);
        $product->description = $request->description;
        $product->precio = $request->precio;
        $product->stock = $request->stock;
        $product->save();
        return $product;
    }


    public function destroy($id)
    {
        $product = Product::destroy($id);
        return $product;
    }
}
