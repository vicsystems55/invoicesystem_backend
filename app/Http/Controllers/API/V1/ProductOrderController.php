<?php

namespace App\Http\Controllers\API\V1;
use App\Http\Controllers\Controller;

use Paystack;


use Carbon\Carbon;
use App\Models\User;
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
        $product_orders = ProductOrder::with('users')->with('invoice')->latest()->get();

        // $total_sales_amount = ProductOrder::with('invoice');
        $total_sales_amount = Invoice::whereIn('id', ProductOrder::pluck('invoice_id'))->get()->sum('total_amount');

        // return $total_sales_amount;

        $total_customers = User::get()->count();

        $invoices = Invoice::where('total_amount','>', 0)->get()->count();

        return $data=[
            'product_orders' => $product_orders,
            'total_customers' => $total_customers,
            'invoices'  => $invoices,
            'total_sales_amount' => $total_sales_amount,
            'timestamp' => Carbon::now()->format('d M, Y : h:m:s')
        ];
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



            // return Paystack::getPaymentData();

            $orderItems = Invoice::with('invoice_items.products')->where('invoice_code', $request->invoiceCode)->first();

            $user = User::find($orderItems->user_id);

            $productOrder = ProductOrder::create([
                'user_id' => $user->id,
                'invoice_id' => $orderItems->id,
                'shipping_address' => $request->address,
                'status' => 'pending',
                'est_delivery_date' => Carbon::now()->addDays(7)
            ]);

            $datax = [
                'name' => $request->user()->name,
                'trackingId' => $orderItems->invoice_code,
                'orderItems' => $orderItems->invoice_items,
                'total_amount' => $orderItems->total_amount,
                'shipping_address' => $productOrder->shipping_address
            ];

            Mail::to($request->user()->email)
                ->send(new OrderPlacedMail($datax));

                // mail store owner

                Mail::to('victorasuquob@gmail.com')
                ->send(new OrderPlacedMail($datax));


        } else {
            # code...

            return response()->json(['message' => 'error message'], 500);
        }




    }

    public function mobileProductOrder(StoreProductOrderRequest $request)
    {
        //

        if (1==1) {
            # code...



            // return Paystack::getPaymentData();

            $orderItems = Invoice::with('invoice_items.products')->where('invoice_code', $request->invoiceCode)->first();

            $user = User::where('email',$request->email)->first();

            $productOrder = ProductOrder::create([
                'user_id' => $user->id,
                'invoice_id' => $orderItems->id,
                'shipping_address' => $request->address,
                'status' => 'pending',
                'est_delivery_date' => Carbon::now()->addDays(7)
            ]);

            $datax = [
                'name' => $user->name,
                'trackingId' => $orderItems->invoice_code,
                'orderItems' => $orderItems->invoice_items,
                'total_amount' => $orderItems->total_amount,
                'shipping_address' => $productOrder->shipping_address
            ];

            Mail::to($user->email)
                ->send(new OrderPlacedMail($datax));

                // mail store owner

                Mail::to('victorasuquob@gmail.com')
                ->send(new OrderPlacedMail($datax));

                return redirect('https://ecomm.vicsystems.com.ng/payment-successful');


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
