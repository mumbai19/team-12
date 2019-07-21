<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['string', 'email', 'max:255', 'unique:users'],
            'contact' => ['required', 'string', 'unique:users'],
            'address' => ['required'],
            'pincode' => ['required', 'max:7'],
            'password' => ['required', 'string', 'min:8', 'confirmed:password_confirmation'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'role' => $data['role'],
            'contact' => $data['contact'],
            'address' => $data['address'],
            'pincode' => $data['pincode'],
            'password' => Hash::make($data['password']),
            'is_verified' => 0
        ]);
    }

    protected function registered(Request $request, $user)
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
