<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class userController extends Controller
{
    public function index ()  {
        $user = DB::table('users')->where('email', Auth::user()->email)->get();
        return view('myaccount' , compact('user'));
    }

    public function edit (string $id)  {
        $user=DB::table('users')->find($id);
        return view('editaccount' , compact('user'));
    }
    
    public function update (Request $request , string $id)  {
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required',
        ]);
        $user = auth()->user();
        if (!Hash::check($request->current_password, $user->password)) {
            return redirect()->back()->withErrors(['current_password' => 'The current password is incorrect.']);
        }
        $newPassword = Hash::make($request->new_password);
         DB::table('users')->where('id', $id)
                                  ->update([
                                    'name'=>$request->name,
                                    'telephone'=>$request->telephone,
                                    'email'=>$request->email,
                                    'password'=>$newPassword
                                  ]

                                  );
    return redirect()->route('indexAcc');
        
    }
}
