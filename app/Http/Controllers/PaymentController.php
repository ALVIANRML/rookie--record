<?php

namespace App\Http\Controllers;

use Midtrans\Snap;
use Midtrans\Config;
use App\Models\Kaset;
use App\Models\payment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PaymentController extends Controller
{
    public function show($id)
    {
        $kaset = Kaset::find($id);
        return view('payment', compact('kaset'));
    }
    
    public function payment_show($id)
    {
        $kaset = Kaset::find($id);
        return view('checkout', compact('kaset'));
    }
    public function checkout(Request $request)
    {
        // $obatvitamin = obatvitamin::find($id);
        // return view('checkout', compact('obatvitamin'));
        $request->request->add(['total_price' => max($request->quantity * 100000, 1.00), 'status' => 'unpaid']);
            $order = payment  ::create($request->all());
            // Set your Merchant Server Key
    \Midtrans\Config::$serverKey = config('midtrans.server_key');
    // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
    \Midtrans\Config::$isProduction = false;
    // Set sanitization on (default)
    \Midtrans\Config::$isSanitized = true;
    // Set 3DS transaction for credit card to true
    \Midtrans\Config::$is3ds = true;

    $params = array(
        'transaction_details' => array(
            'order_id' => $order->id,
            'gross_amount' => max($order->total_price , 0.01),
        ),
        'customer_details' => array(
            'name' => $request->name,
            'phone' => $request->phone,
        ),
    );

    $snapToken = \Midtrans\Snap::getSnapToken($params);
    return view('checkout',compact('snapToken','order'));
        }

    public function callback(Request $request)
    {
        $serverKey = config(['midtrans.server_key']);
        $hashed = hash("sha512", $request->payment_id.$request->status_code.$request->gross_amount.$serverKey);
        if($hashed == $request->signature_key){
            if($request->transaction_status == 'capture'){
                $order = payment::find($request->payment_id);
                $order->update(['status'=>'paid']);
            }
        }
    }


}
