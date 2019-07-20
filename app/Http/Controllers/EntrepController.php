<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Response;

class EntrepController extends Controller
{

    function sendAddr(){
        $asc=array("Ramesh"=>"Store # 23,Ground Floor Infinity Mall, Link Rd, Malad West, Mumbai, Maharashtra 400064","Paresh"=>"Shop No.5,Saidham Co.Op.Society. ,Opp.Mittal Collage, Nahar Nagar, Malad, West, Mumbai, Maharashtra 400064","Taresh"=>"Mehta Industrial Estate, Gala 59, Liberty Garden Cross Rd Number 3, Malad (W, Mumbai, Maharashtra 400064","TDP"=>"Ruturaj, Nan Shankar Seth Chowk, Liberty Garden Road No 3, Malad West, Mumbai, Maharashtra 400064");
        return view('vendor1.pages.home')->with('asc',$asc);

    }

    function intr(){
        $asc=array("Ramesh"=>"Store # 23,Ground Floor Infinity Mall, Link Rd, Malad West, Mumbai, Maharashtra 400064");
        return view('vendor1.pages.interested')->with('asc',$asc);

    }

}
