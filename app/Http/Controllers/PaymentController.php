<?php

namespace App\Http\Controllers;

use App\Models\Kaset;
use App\Models\payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function show($id)
    {
        $kaset = Kaset::find($id);
        return view('payment', compact('kaset'));
    }
    public function checkout(Request $request)
    {

        $request->request->add(['total_price'=> $request->qty * 100000, 'status' => 'unpaid']);
        
        $order = payment::create($request->all());
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
        'gross_amount' => $order->total_price,
    ),
    'customer_details' => array(
        'name' => $request->name,
        'phone'=> $request->phone,

    ),
);

$snapToken = \Midtrans\Snap::getSnapToken($params);
dd($snapToken);
return view('checkout',compact('snapToken','order'));
    }

}
