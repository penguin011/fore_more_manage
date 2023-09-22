<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\Request; 
use DB; 
use Carbon\Carbon; 
use App\User; 
use Hash;

class PasswordResetController extends Controller
{
    public function submitResetPasswordForm(Request $request)
    {
        
        $request->validate([
            'email' => 'required|email|exists:users',
            'password' => 'required|numeric|confirmed',
            'password_confirmation' => 'required'
        ]);
        $updatePassword = DB::table('password_resets')
                            ->where([
                                'email' => $request->email, 
                                'token' => $request->token
                              ])
                              ->first();
          if(!$updatePassword){
              return back()->withInput()->with('error', 'Invalid token!');
          }
          $user = User::where('email', $request->email)
                      ->update(['password' => Hash::make($request->password)]);

          DB::table('password_resets')->where(['email'=> $request->email])->delete();
          return redirect('/login')->with('message', 'Your password has been changed!');

      }
}
