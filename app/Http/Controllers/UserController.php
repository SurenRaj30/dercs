<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Staff;
use App\Models\Runner;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session; 

class UserController extends Controller
{
    
    public function viewCustForm(){
        return view('manageRegistration.regCust');
    }

    public function viewStaffForm(){
        return view('manageRegistration.regStaff');
    }

    public function viewRunnerForm(){
        return view('manageRegistration.regRun');
    }
    
    public function saveCust(request $request){
        $customer = new Customer;
    
        $customer->user_fullname = $request->input('fullname');
        $customer->user_address = $request->input('addr');
        $customer->user_email = $request->input('email');
        $customer->user_password = Hash::make($request->input('pwd'));
        $customer->user_type = $request->input('type');

        $customer->save();
        return view('manageAccount.account_customer');

    }

    public function saveStaff(request $request){
        $staff = new Staff;
    
        $staff->user_fullname = $request->input('fullname');
        $staff->user_email = $request->input('email');
        $staff->user_password = Hash::make($request->input('pwd'));
        $staff->user_type = $request->input('type');

        $staff->save();
        return view('manageAccount.account_staff');
    }

    public function saveRun(request $request){
        $runner = new Runner;
    
        $runner->user_fullname = $request->input('fullname');
        $runner->user_email = $request->input('email');
        $runner->user_password = Hash::make($request->input('pwd'));
        $runner->run_age = $request->input('age');

        $runner->run_lang = $request->input('lang');
        $runner->run_citizen = $request->input('citizen');
        $runner->run_license = $request->input('license');
        $runner->run_agree = $request->input('agree');
        $runner->user_type = $request->input('type');

        $runner->save();
        return view('manageAccount.account_runner');
       
    }
    
}
