<?php

namespace App\Http\Controllers;

use Paystack;


use App\Models\Invoice;
use App\Models\ProductOrder;
use App\Mail\OrderPlacedMail;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\StoreProductOrderRequest;
use App\Http\Requests\UpdateProductOrderRequest;

class ProductOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductOrderRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductOrderRequest $request)
    {
        //

        if (Paystack::isTransactionVerificationValid($request->reference)) {
            # code...

            $orderItems = Invoice::with('invoice_items.products')->where('invoice_code', $request->invoiceCode)->first();



            $datax = [
                'name' => $request->user()->name,
                'trackingId' => $orderItems->invoice_code,
                'orderItems' => $orderItems->invoice_items
            ];

            Mail::to('victorasuquob@gmail.com')
                ->send(new OrderPlacedMail($datax));


        } else {
            # code...

            return response()->json(['message' => 'error message'], 500);
        }




    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProductOrder  $productOrder
     * @return \Illuminate\Http\Response
     */
    public function show(ProductOrder $productOrder)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductOrderRequest  $request
     * @param  \App\Models\ProductOrder  $productOrder
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductOrderRequest $request, ProductOrder $productOrder)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProductOrder  $productOrder
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductOrder $productOrder)
    {
        //
    }
}
