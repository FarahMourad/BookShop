<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class EditUserInfoController
{
    public function showSetting(){
        return view('setting');
    }
    public function edit(Request $request): RedirectResponse
    {
        $output = ["fail", "fail", "fail", "fail", "fail",  "password"];
        if ($request->first_name !== null){
            $output[0] = "pass";
            $this->changeFName($request);
        }
        if ($request->last_name !== null){
            $output[1] = "pass";
            $this->changeLName($request);
        }
        if ($request->user_name !== null){
            $output[2] = "pass";
            $this->changeUsername($request);
        }
        if ($request->phone_number !== null){
            $output[3] = "pass";
            $this->changePhone($request);
        }
        if ($request->shipping_address !== null){
            $output[4] = "pass";
            $this->changeAdd($request);
        }
        if ($request->old_password !== null && $request->new_password !== null && $request->confirm_password !== null){
            $output[5] = $this->changePass($request);
        }
        if ($output === ["fail", "fail", "fail" , "fail", "fail", "password"])
            return Redirect::back()->withErrors(['error' => 'Nothing to be updated!']);
        else if ($output === ["fail", "fail", "fail", "fail", "fail", "fail"])
            return Redirect::back()->withErrors(['error' => 'Wrong Password!']);
        else
            return redirect()->back()->with(['msg' => 'UPDATED']);
    }

    public function changeFName(Request $request)
    {
        $request->validate([
            'first_name'=>'required',
        ]);
        $current_user = auth()->user();
        $current_user->update([
            'first_name' => $request->first_name
        ]);
    }

    public function changeLName(Request $request)
    {
        $request->validate([
            'last_name'=>'required',
        ]);
        $current_user = auth()->user();
        $current_user->update([
            'last_name' => $request->lName
        ]);
    }

    public function changeUsername(Request $request)
    {
        $request->validate([
            'user_name'=>'required',
        ]);
        $current_user = auth()->user();
        $current_user->update([
            'user_name' => $request->user_name
        ]);
    }

    public function changePhone(Request $request)
    {
        $request->validate([
            'phone_number'=>'required',
        ]);
        $current_user = auth()->user();
        $current_user->update([
            'phone_number' => $request->phone_number
        ]);
    }

    public function changeAdd(Request $request)
    {
        $request->validate([
            'shipping_address'=>'required',
        ]);
        $current_user = auth()->user();
        $current_user->update([
            'shipping_address' => $request->shipping_address
        ]);
    }

    public function changePass(Request $request): string
    {
        $request->validate([
            'old_password'=>'required',
            'new_password' => 'required|min:8',
            'confirm_password' => 'required|same:new_password|min:8'
        ]);
        $current_user = auth()->user();
        if (Hash::check($request->old_password, $current_user->password)){
            $current_user->update([
                'password' => bcrypt($request->new_password)
            ]);
            return "pass";
        } else{
            return "fail";
        }
    }
}
