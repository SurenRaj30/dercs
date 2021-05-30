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

        if(Customer::where('user_email', '=', $request->email)-> first()){
            
            $oldName = $request->old('fullname');
            $oldAddr = $request->old('addr');
            
            return redirect()
            ->back()->with('fail', 'The email address is already in use')
            ->withInput();

        }else{
            $customer->save();
            return redirect()->action([LoginController::class, 'viewCustLogin'])
            ->with('success', 'You are now registered as customer and can log in');
        }

    }

    public function saveStaff(request $request){
        $staff = new Staff;
    
        $staff->user_fullname = $request->input('fullname');
        $staff->user_email = $request->input('email');
        $staff->user_password = Hash::make($request->input('pwd'));
        $staff->user_type = $request->input('type');

       if(Staff::where('user_email', '=', $request->email)-> first()){
            
            $oldName = $request->old('fullname');
            $oldAddr = $request->old('addr');
            
            return redirect()
            ->back()->with('fail', 'The email address is already in use')
            ->withInput();

        }else{
            $staff->save();
            return redirect()->action([LoginController::class, 'viewStaffLogin'])
            ->with('success', 'You are now registered as staff and can log in');
        }

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

        if(Runner::where('user_email', '=', $request->email)-> first()){
            
            $oldName = $request->old('fullname');
            $oldAddr = $request->old('addr');
            
            return redirect()
            ->back()->with('fail', 'The email address is already in use')
            ->withInput();

        }else{
            $runner->save();
            return redirect()->action([LoginController::class, 'viewRunnerLogin'])
            ->with('success', 'You are now registered as runner and can log in');
        }

    }
}
