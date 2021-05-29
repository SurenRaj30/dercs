<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;

use Illuminate\Http\Request;

class ToyyibpayController extends Controller
{
    public function createBill(){

    
        $option = array(
        'userSecretKey'=>config('toyyibpay.key'),
        'categoryCode'=>config('toyyibpay.category'),
        'billName'=>'Car Rental WXX123',
        'billDescription'=>'Car Rental WXX123 On Sunday',
        'billPriceSetting'=>1,
        'billPayorInfo'=>1,
        'billAmount'=>1000,
        'billReturnUrl'=>route('toyyibpay-status'),
        'billCallbackUrl'=>route('toyyibpay-callback'),
        'billExternalReferenceNo' => 'Bill-0001',
        'billTo'=>'John Doe',
        'billEmail'=>'jd@gmail.com',
        'billPhone'=>'0194342411',
        'billSplitPayment'=>0,
        'billSplitPaymentArgs'=>'',
        'billPaymentChannel'=>'0',
        'billContentEmail'=>'Thank you for using our service!',
        'billChargeToCustomer'=> 2
        );  

        $url = 'https://toyyibpay.com/index.php/api/createBill';
        $response = Http::asForm()->post($url, $option); 
        $billCode = $response[0]['BillCode'];
        return redirect('https://toyyibpay.com/'. $billCode);

        // $curl = curl_init();
        // curl_setopt($curl, CURLOPT_POST, 1);
        // curl_setopt($curl, CURLOPT_URL, 'https://toyyibpay.com/index.php/api/createBill');  
        // curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        // curl_setopt($curl, CURLOPT_POSTFIELDS, $some_data);
      
        // $result = curl_exec($curl);
        // $info = curl_getinfo($curl);  
        // curl_close($curl);
        // $obj = json_decode($result);
        // echo $result;
    }

   

    public function paymentStatus(){

        $response = request()->all(['status_id', 'billcode','order_id']);
        return $response;
    }

    public function callback(){
        $response = request()->all(['refno','status','reason','billcode', 'order_id', 'amount']);
        Log::info($response);
    }
}


