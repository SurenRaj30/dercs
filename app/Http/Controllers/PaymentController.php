<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PaymentController extends Controller
{
    public function create()
    {
        $data= [
            'apiKey' => config('bizappay.key'),
            'categoryCode' => config('bizappay.category'),
            'billName' => 'Payment for INVOI192',
            'billAmount' => 12.50,
            'billTo' => 'DERCS',
            'billEmail' => 'imanjofaris@gmail.com',
            'billPhone' => '01123510966',
            'billReturnUrl' => route('bizappay-status'),
            'billCallbackUrl' => route('bizappay-callback'),
            'billExternalReferenceNo' => ''
        ];

        $url = 'https://www.bizappay.com/staging/api/createNewBill';

        $response = Http::asForm()->post($url, $data);
    
        return redirect($response['paymentUrl']);
    }

   

    public function status()
    {
        $response = request()->all();
        return $response;
    }

    public function callback()
    {
        $response = request()->all(['billcode', 'billamount', 'billstatus', 'billtrans', 'billinvoice']);
        Log::info($response);
    }
}




