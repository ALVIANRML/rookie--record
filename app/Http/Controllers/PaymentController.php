<?php

namespace App\Http\Controllers;

use Midtrans\Snap;
use Midtrans\Config;
use App\Models\Kaset;
use App\Models\payment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Compactdisk;

class PaymentController extends Controller
{
    public function show($id)
    {

        $compactdisk = Compactdisk::find($id);
        if($compactdisk){
            return view('payment', ['compactdisk' => $compactdisk]);
        }
        $kaset = Kaset::find($id);
        if ($kaset) {
            // Logika untuk menangani kaset
            return view('payment', ['kaset' => $kaset]);
        }
        return view('payment not found');
         }


         public function showcheckout(Request $request, $id)
         {
            $compactdisk = Compactdisk::find($id);
        if($compactdisk){
           ([
            'compactdisk'=>$compactdisk
           ]);
        }
        $kaset = Kaset::find($id);
        if ($kaset) {(
            // Logika untuk menangani kaset
            ['kaset' => $kaset]);
        }

             $request->request->add([
                 'total_price' => max($request->quantity * 100000, 0.01),
                 'status' => 'unpaid',

             ]);

             // Ganti ini dengan atribut yang sesuai dengan Compactdisk atau Kaset
             $order = Payment::create($request->all());

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
                     'gross_amount' => max($order->total_price , 1.0),
                 ),
                 'customer_details' => array(
                     'name' => $request->name,
                     'phone' => $request->phone,
                 ),
             );

             $snapToken = \Midtrans\Snap::getSnapToken($params);

             // Pastikan nilai total_price dan atribut lainnya sudah benar sebelum ditampilkan
             return view('checkout', compact('snapToken', 'order', 'kaset', 'compactdisk'));
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
    // public function showchzeckout($id)
    // {
    //     $compactdisk = Compactdisk::find($id);
    //     if($compactdisk){
    //         return view('checkout', ['compactdisk' => $compactdisk]);
    //     }
    //     $kaset = Kaset::find($id);
    //     if ($kaset) {
    //         // Logika untuk menangani kaset
    //         return view('checkout', ['kaset' => $kaset]);
    //     }
    //     return view('checkout not found');
    //      }


}
