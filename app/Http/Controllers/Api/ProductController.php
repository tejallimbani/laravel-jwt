<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;

class ProductController extends Controller
{
    //
    public function add(Request $request) {
        $product = new Product();
        $product->name = $request->name;
        $product->description = $request->description;
        $product->bathroom = $request->bathroom;
        $product->bedroom = $request->bedroom;
        $product->area = $request->area;
        $product->price = $request->price;
        $product->address = $request->address;
        $product->product_type = $request->product_type;
        $product->product_space = $request->product_space;
        $product->author = $request->author;
        $product->save();

        return response([
            'status' => 'Success',
            'message' => 'Product Successfully Inserted.'
        ], 200);
    }
}
