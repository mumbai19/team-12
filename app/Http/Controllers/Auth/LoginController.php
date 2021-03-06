<?php

namespace App\Http\Controllers\Auth;
use Session;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

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
    protected $redirectTo = '/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function authenticated(Request $request, $user)
    {
        switch ($user->role) {
            case 1:
                $this->redirectTo = '/farmer';
                break;
            case 2:
                $this->redirectTo = '/expert';
                break;
            case 3:
                $this->redirectTo = '/entrep';
                break;
            case 4:
                $this->redirectTo = '/vendors';
                break;
            case 5:
                $this->redirectTo = '/community';
                break;
        }

        if ($user->is_verified != 1) {
            return "Please verify the user
                <script>setTimeout(function () {
                    window.location.href = '/logout';
                }, 10000)</script>
            ";
//            return response()->redirectTo('/logout');
        }
    }
}
