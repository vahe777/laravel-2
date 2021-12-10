<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductStoreRequest;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $products = Product::query()->latest()->get();

        return view('admin.product.index', [
            'products' => $products
        ]);
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        $is_update = false;

        return view('admin.product.create', [
            'is_update' => $is_update
        ]);
    }

    /**
     * @param ProductStoreRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(ProductStoreRequest $request)
    {
        $request['status'] = 1;
        Product::query()->create($request->all());

        return redirect()->route('product.index')->with('success', 'Product has been created!');
    }

    /**
     * @param Product $product
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(Product $product)
    {
        return view('admin.product.show', [
           'product' => $product
        ]);
    }

    /**
     * @param Product $product
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(Product $product)
    {
        $is_update = true;

        return view('admin.product.edit', [
            'product' => $product,
            'is_update' => $is_update
        ]);
    }

    /**
     * @param ProductStoreRequest $request
     * @param Product $product
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(ProductStoreRequest $request, Product $product)
    {
        $product['status'] = ($request->has('status') && $product['active']) ? 1 : 0;
        $product->update($request->all());

        return redirect()->route('product.index')->with('success', 'Product has been updated!');
    }

    /**
     * @param Product $product
     * @return mixed
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->back()->withSuccess('Product has been deleted!');
    }
}
