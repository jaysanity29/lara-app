<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;
use App\Http\Flash;
use Session;

class LoginController extends Controller
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

    use AuthenticatesUsers;
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = '/admin/dashboard';
    protected function authenticated(Request $request, $user)
    {   
        session()->flash('message','Successfully Login.');
    }
    protected function redirectTo() {

        if(Auth::user()->type == 1) {
       
            return '/admin/dashboard';
        }
        else if (Auth::user()->type == 2) {
            return '/student/dashboard';
        }
        else if (Auth::user()->type == 3) {
            return '/research-personnel/dashboard';
        }
        else if (Auth::user()->type == 4) {
            return '/panel/dashboard';
        }
        
    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
