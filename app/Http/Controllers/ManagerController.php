<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ManagerController
{
    public function promote_user(Request $request){
        $current_user = auth()->user();
        if ($current_user->is_manager == 1){
            //send email not e-mail
            $promoted_user = User::where('e-mail', $request->email)->first();
            if ($promoted_user != null){
                $promoted_user->update([
                    'is_manager' => 1
                ]);
                return redirect()->back()->with(['msg' => 'UPDATED']);
            }
            return redirect()->back()->with(['msg' => 'No such user']);
        }
        return Redirect::back()->withErrors(['error' => 'Not allowed!']);

    }
}
