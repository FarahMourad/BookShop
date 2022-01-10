<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ManagerController
{
    public function promote_user(Request $request){
        $current_user = auth()->user();
        if ($current_user->is_manager == 1){
            //send email not e-mail
            $promoted_user = User::where('e-mail', $request->email)->first();
            $promoted_user->update([
                'is_manager' => 1
            ]);
        }

    }
}
