<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use App\Http\Flash;

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
    protected function redirectTo() {
        if(Auth::user()->type == 1) {
        session()->flash('message', 'This is a flash message containing feedback to the user!'); 
            return 'admin/dashboard';
        }
        else if (Auth::user()->type == 2) {
            return 'student/dashboard';
        }
        else if (Auth::user()->type == 3) {
            return 'adviser/dashboard';
        }
        else if (Auth::user()->type == 4) {
            return 'panel/dashboard';
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
