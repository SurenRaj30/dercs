<?php

namespace App\Http\Controllers;
use App\Models\Customer;
use App\Models\Staff;
use App\Models\Runner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\A;

class LoginController extends Controller
{
    public function check(Request $request){
       
        $request->validate([
            'email' => 'required',
            'pwd' => 'required'
        ]);

        $userInfo = Customer::where('user_email', "=", $request->email)->first();

        if(!$userInfo){
            return back()-> with("Failed");
        }else 
        //check password
        {
            if(Hash::check($request->pwd, $userInfo->user_password)){

                $request->session()->put('Logged User', $userInfo->custID);
                return view ('manageAccount/account_customer');

            }else{
                
               echo "oops";
            }
        }
    }
}

