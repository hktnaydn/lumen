<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    public function showAll()
    {
       $product=Product::all();
       return response()->json($product);
      // dd($product);
    }

    public function show($id)
    { 
       return response()->json(Product::find($id));
    }
    public function showproductcategory()
    { 
       return response()->json(Product::with("category")->get());
    }
    public function save(Request $request)
    {
        $product=Product::create($request->all());
        return response()->json($product);
    }

    public function update(Request $request,$id)
    {
        $product=Product::findOrfail($id);
        $product->update($request->all());

        return response()->json($product);
    }

    public function delete($id)
    {
        Product::find($id)->delete();
        return response()->json('Ürün Silinmiştir');

    }
}
