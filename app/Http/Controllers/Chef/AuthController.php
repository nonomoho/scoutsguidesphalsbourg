<?php

namespace App\Http\Controllers\Chef;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/chef/home';
    protected $username = 'login';
    protected $guard = 'chef';


    public function showLoginForm()
    {
        if (Auth::guard('chef')->check()) {
            return redirect('/chef/home');
        } else if (Auth::guard('web')->check()) {
            return redirect('');
        }
        return view('chef/login');
    }


    public function logout()
    {
        Auth::guard('chef')->logout();

        return redirect('');
    }


}