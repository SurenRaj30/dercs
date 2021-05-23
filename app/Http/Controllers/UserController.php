<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Staff;
use App\Models\Runner;



class UserController extends Controller
{
    public function saveCust(request $request){
        $customer = new Customer;
    
        $customer->user_fullname = $request->input('fullname');
        $customer->user_address = $request->input('addr');
        $customer->user_email = $request->input('email');
        $customer->user_password = $request->input('pwd');
        $customer->user_type = $request->input('type');

        $customer->save();
        return view('manageAccount.account_customer');

    }

    public function saveStaff(request $request){
        $staff = new Staff;
    
        $staff->staff_fullname = $request->input('fullname');
        $staff->staff_email = $request->input('email');
        $staff->staff_password = $request->input('pwd');
        $staff->user_type = $request->input('type');

        $staff->save();
        return view('manageAccount.account_staff');
    }

    public function saveRun(request $request){
        $runner = new Runner;
    
        $runner->run_fullname = $request->input('fullname');
        $runner->run_email = $request->input('email');
        $runner->run_password = $request->input('pwd');
        $runner->run_age = $request->input('age');

        $runner->run_lang = $request->input('lang');
        $runner->run_citizen = $request->input('citizen');
        $runner->run_license = $request->input('license');
        $runner->run_agree = $request->input('agree');
        $runner->user_type = $request->input('type');

        return view('manageAccount.account_runner');
        $runner->save();
    }

    
}
