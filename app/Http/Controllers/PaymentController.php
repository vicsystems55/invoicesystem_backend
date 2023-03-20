<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Paystack;

class PaymentController extends Controller
{

    /**
     * Redirect the User to Paystack Payment Page
     * @return Url
     */
    public function redirectToGateway()
    {
        try{
            return Paystack::getAuthorizationUrl()->redirectNow();
        }catch(\Exception $e) {
            return Redirect::back()->withMessage(['msg'=>'The paystack token has expired. Please refresh the page and try again.', 'type'=>'error']);
        }
    }

    /**
     * Obtain Paystack payment information
     * @return void
     */
    public function handleGatewayCallback()
    {
        $paymentDetails = Paystack::getPaymentData();

        dd($paymentDetails);
        // Now you have the payment details,
        // you can store the authorization_code in your db to allow for recurrent subscriptions
        // you can then redirect or do whatever you want
    }

    public function initiatepay()
    {
        # code...

        $data = array(
            "amount" => 1000 * 100,
            "reference" => '5g4g5485g8545'.rand(1000,999),
            "email" => 'user@mail.com',
            "currency" => "NGN",
            "orderID" => 23456,
            "split_code" => "SPL_UZcYSzM76j",
            "callback_url" => "http://localhost:8080/payment-successful"

        );

    return Paystack::getAuthorizationUrl($data)->redirectNow();
    }
}
