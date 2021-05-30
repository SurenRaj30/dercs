<?php

namespace App\Http\Controllers;
use App\Models\Customer;
use App\Models\Staff;
use App\Models\Runner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class LoginController extends Controller
{
    
    public function viewCustLogin(){
        return view('manageAuth.login');
    }

    public function viewStaffLogin(){
        return view('manageAuth.loginStaff');
    }

    public function viewRunnerLogin(){
        return view('manageAuth.loginRun');
    }
    
    public function check(Request $request){


// validate customer login

        $request->validate([
            'email' => 'required',
            'pwd' => 'required',
        ]);

        
        $userInfo = Customer::where('user_email', '=', $request->email)->first();

        if(!$userInfo){
            $oldEmail = $request->old('email');
            return redirect()
            ->back()->with('not exist', 'The account do not exist. Please register before logging in')
            ->withInput();
        }else{
            if(Hash::check($request->pwd, $userInfo->user_password)){
                if($userInfo->user_type == 'Customer'){
                    $request->session()->put('logged', $userInfo->custID);
                    return view ('manageAccount.account_customer');}
                }else{
                $oldEmail = $request->old('email');
                return redirect()
               ->back()->with('fail', 'You have entered the wrong password')
               ->withInput();
            }
        }
    }


// validate staff login 
    public function checkStaff(Request $request){
       
        $request->validate([
            'email' => 'required',
            'pwd' => 'required',
        ]);

        $userInfo = Staff::where('user_email', "=", $request->email)->first();

        if(!$userInfo){
            $oldEmail = $request->old('email');
            return redirect()
            ->back()->with('not exist', 'The account do not exist. Please register before logging in')
            ->withInput();
        }else {
            if(Hash::check($request->pwd, $userInfo->user_password)){
                if($userInfo->user_type == 'Staff'){
                    $request->session()->put('logged', $userInfo->staffID);
                    return view ('manageAccount.account_staff');
                }
            }else{
                $oldEmail = $request->old('email');
                return redirect()
               ->back()->with('fail', 'You have entered the wrong password')
               ->withInput();
            }
        }
    }

// validate runner login

    public function checkRunner(Request $request){
       
        $request->validate([
            'email' => 'required',
            'pwd' => 'required',
        ]);

        $userInfo = Runner::where('user_email', "=", $request->email)->first();

        if(!$userInfo){
            $oldEmail = $request->old('email');
            return redirect()
            ->back()->with('not exist', 'The account do not exist. Please register before logging in')
            ->withInput();
        }else 
        {
            if(Hash::check($request->pwd, $userInfo->user_password)){
                if($userInfo->user_type == 'Runner'){
                    $request->session()->put('logged', $userInfo->runID);
                    return view ('manageAccount.account_runner');
                }
            }else{
                $oldEmail = $request->old('email');
                return redirect()
                ->back()->with('fail', 'You have entered the wrong password')
                ->withInput();
            }
        }
    }
}

