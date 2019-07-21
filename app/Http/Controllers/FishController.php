<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Response;

class FishController extends Controller
{

    

    function sendAddr(){
        $id=request()->user()->id;
        
        $sub=DB::select("SELECT vendor_id from vendor_interest 
        where farmer_id=$id");
         $p=DB::select("SELECT pincode from users
         where id=$id");
         $pin=json_decode(json_encode($p),true) ;
        //print_r($pp);
        $pp=$pin['0']["pincode"];
        $res=json_decode(json_encode($sub),true) ;
        $map=array();
        $res11=[];
        foreach($res as $r1=>$val){
            $res11[]=$val["vendor_id"];
        }
        $a=implode(',',$res11);
        print_r($a);
        #$res1={implode(',',$res11)};
        if(!empty($res11)){
         $loc=DB::select("SELECT u.id,u.name,u.contact,u.address,p.name as name1,p.cost from users as u
        Inner join products as p on p.vendor_id=u.id
        where role='4' and u.id not in ($a) and pincode =$pp
        order BY  u.id");
        $int=DB::select("SELECT u.id,u.name,u.contact,u.address,p.name as name1,p.cost from users as u INNER join products as p on p.vendor_id=u.id
        where role='4' and u.id  in ($a) and pincode =$pp
        order BY u.id");
                #return view('farmer.pages.nbv')->with('asc',$loc)->with('int',$int);

        }
        else{
            $loc=DB::select("SELECT u.id,u.name,u.contact,u.address,p.name as name1,p.cost from users  u
            Inner join products  p on p.vendor_id=u.id
        where role='4' and pincode =$pp
        order BY id");
        $int=array();
        #return view('farmer.pages.nbv')->with('asc',$loc)->with('int',$int);
        }
        #print_r($int);
        if($int)
        {$res=json_decode(json_encode($int),true);
        foreach($res as $r1=>$val){
            $map[]=$val["address"];
        }}
        if($loc)
        {
            $res=json_decode(json_encode($int),true);
            foreach($res as $r1=>$val){
                $map[]=$val["address"];
            }
        }

        return view('farmer.pages.nbv')->with('asc',$loc)->with('int',$int)->with('fid',$id)->with('map',$map);

    }

    function intr(){
        // $asc=array("Ramesh"=>"Store # 23,Ground Floor Infinity Mall, Link Rd, Malad West, Mumbai, Maharashtra 400064");
        $vid=request('vid');
        $fid=request('fid');
        DB::insert("INSERT into vendor_interest (vendor_id,farmer_id)
                    VALUES($vid,$fid)");
        
        //return view('vendor1.pages.interested')->with('asc',$asc);
        return($this->sendAddr());
     }

     function list(){
         $vid=2;
         $loc=DB::select("SELECT u.id,u.name,u.contact,u.address from users as u
            Inner join vendor_interest as p on p.farmer_id=u.id
            where p.vendor_id=$vid
        order BY u.id");
        return view('vendor1.pages.interested')->with('asc',$loc);

     }

     function flist(){
        $fid=1;
        $loc=DB::select("SELECT u.id,u.name,u.contact,u.address from users as u
           Inner join entrepreneur_interest as p on p.entrepreneur_id=u.id
           where p.farmer_id=$fid
       order BY u.id");
       return view('farmer.pages.interested')->with('asc',$loc);

    }

    function elist(){
        $id=request()->user()->id;
        
        $sub=DB::select("SELECT farmer_id from entrepreneur_interest 
        where entrepreneur_id=$id");
         $p=DB::select("SELECT pincode from users
         where id=$id");
         $pin=json_decode(json_encode($p),true) ;
        //print_r($pp);
        $pp=$pin['0']["pincode"];
        $res=json_decode(json_encode($sub),true) ;
        $map=array();
        $res11 = [];
        foreach($res as $r1=>$val){
            $res11[]=$val["vendor_id"];
        }
        $a=implode(',',$res11);
        print_r($a);
        #$res1={implode(',',$res11)};
        if(!empty($res11)){
         $loc=DB::select("SELECT u.id,u.name,u.contact,u.address,p.fishname as name1,p.cost from users as u
        Inner join farmer_products as p on p.farmer_id=u.id
        where role='1' and u.id not in ($a) and pincode =$pp
        order BY  u.id");
        $int=DB::select("SELECT u.id,u.name,u.contact,u.address,p.fishname as name1,p.cost from users as u INNER join farmer_products as p on p.farmer_id=u.id
        where role='1' and u.id  in ($a) and pincode =$pp
        order BY u.id");
                #return view('farmer.pages.nbv')->with('asc',$loc)->with('int',$int);

        }
        else{
            $loc=DB::select("SELECT u.id,u.name,u.contact,u.address,p.fishname as name1,p.cost from users  u
            Inner join farmer_products  p on p.farmer_id=u.id
        where role='1' and pincode =$pp
        order BY id");
        $int=array();
        #return view('farmer.pages.nbv')->with('asc',$loc)->with('int',$int);
        }
        #print_r($int);
        if($int)
        {$res=json_decode(json_encode($int),true);
        foreach($res as $r1=>$val){
            $map[]=$val["address"];
        }}
        if($loc)
        {
            $res=json_decode(json_encode($int),true);
            foreach($res as $r1=>$val){
                $map[]=$val["address"];
            }
        }

        return view('entrep.pages.nbv')->with('asc',$loc)->with('int',$int)->with('fid',$id)->with('map',$map);

    }

    function entr(){
        // $asc=array("Ramesh"=>"Store # 23,Ground Floor Infinity Mall, Link Rd, Malad West, Mumbai, Maharashtra 400064");
        $fid=request('fid');
        $eid=request('eid');
        DB::insert("INSERT into entrepreneur_interest (farmer_id,entrepreneur_id)
                    VALUES($fid,$eid)");
        
        //return view('vendor1.pages.interested')->with('asc',$asc);
        return($this->elist());
     }

}
