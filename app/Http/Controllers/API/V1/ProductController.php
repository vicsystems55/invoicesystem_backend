<?php

namespace App\Http\Controllers\API\V1;
use App\Http\Controllers\Controller;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        return Product::latest()->get();
    }

    public function products()
    {
        //

        return Product::latest()->paginate(3);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductRequest $request)
    {
        //

        // return $request->all();

        $doc = $request->file('product_image');


        $new_name = rand().".".$doc->getClientOriginalExtension();

        $file1 = $doc->move(public_path('products'), $new_name);

        $product = Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'img_url' => asset('products').'/'.$new_name,
            'price' => $request->price,
            'user_id' => $request->user_id,
            'status' => 'active',
            'discount' => 0,
        ]);

        return $product;




    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductRequest  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
