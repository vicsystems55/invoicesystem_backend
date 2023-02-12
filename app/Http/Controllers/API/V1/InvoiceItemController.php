<?php

namespace App\Http\Controllers\API\V1;
use App\Http\Controllers\Controller;

use App\Models\Invoice;
use App\Models\Product;
use App\Models\InvoiceItem;
use App\Http\Requests\StoreInvoiceItemRequest;
use App\Http\Requests\UpdateInvoiceItemRequest;

class InvoiceItemController extends Controller
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
     * @param  \App\Http\Requests\StoreInvoiceItemRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreInvoiceItemRequest $request)
    {
        //

        $request->validate([
            'product_id' => 'required',

            'invoice_code' => 'required'
        ]);

        $invoice = Invoice::where('invoice_code', $request->invoice_code)->first();

        $product = Product::find($request->product_id);

        InvoiceItem::updateOrCreate([
            'invoice_id' => $invoice->id,
            'product_id' => $product->id
        ],[
            'invoice_id' => $invoice->id,
            'product_id' => $product->id,
            'price' => $product->price,
            'qty' => 1,
            'total_amount' => $product->price,

        ]);

        $invoiceTotal = InvoiceItem::where('invoice_id', $invoice->id )->get()->sum('total_amount');

        Invoice::find($invoice->id)->update([
            'total_amount' => $invoiceTotal
        ]);


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\InvoiceItem  $invoiceItem
     * @return \Illuminate\Http\Response
     */
    public function show(InvoiceItem $invoiceItem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateInvoiceItemRequest  $request
     * @param  \App\Models\InvoiceItem  $invoiceItem
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateInvoiceItemRequest $request, InvoiceItem $invoiceItem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\InvoiceItem  $invoiceItem
     * @return \Illuminate\Http\Response
     */
    public function destroy(InvoiceItem $invoiceItem)
    {
        //
    }
}
