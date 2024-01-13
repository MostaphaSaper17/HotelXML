<?php

namespace App\Http\Controllers\Agent\Auth;

use Illuminate\Http\Request;
use Validator;
use Auth;

use App\Http\Controllers\Controller;

class LogoutController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    /**
     * Where to redirect users after login.
     *
     * @var string
     */

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('website.home');
    }

    protected function guard()
     {
         return auth()->guard('agent');
     }
}
