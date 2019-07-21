<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class authController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function auth(Request $request){
       $email = $request->input('email');
       $password = $request->input('password'); 
       $data = DB::table('users')->where('email', $email)->where('password',$password)->first();
    //    $data = DB::select('select * from users where email='.$email.' and  password='.$password);
    if(empty($data)){
        return redirect()->route('login');
    }else{
        if($data->role == 'FARMER'){
        return redirect()->route('farmer');
        }elseif($data->role == 'EXPERT'){

        }

    }
    }

}