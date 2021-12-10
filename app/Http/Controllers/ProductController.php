<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request, Product $product)
    {
        $products = $product->getProductsByName($request)->get();
        return view('product.products', compact('products'));

//        $products = Product::all();
//        $paginate = 9;
//        $products = $products->paginate($paginate);
//        dd($request->getRequestUri());
        //filter
        /*return Product::filter($request->all())->get();*/

    }

    public function getProduct($product_id){
//        $product = Product::where('id', $product_id)->get();

        $products = Product::where('id', $product_id)->get();

        return view('product.product', [
            'products' => $products
        ]);
    }
}
