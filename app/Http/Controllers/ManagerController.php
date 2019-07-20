<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Response;

class ManagerController extends Controller
{
    public function plList(){
        $pl=DB::select("SELECT d_id,dest_name,car_id, driver.end
        from driver
        natural join manager
        where manager.m_id=1
        order by d_id");
        //$p=$this->dstatus();
        // print_r($p);
        // return;
        return view('manager.layouts.schedules')->with('pl',$pl);

    }

    public function createSchedule(){
        $did=$_POST['did'];
        $dest=$_POST['dest'];
        $date=$_POST['deddate'];
        $time=$_POST['dedtime'];
        $cid=$_POST['cid'];

        $cmb=date('Y-m-d H:i:s',strtotime("$date $time"));
        DB::update("UPDATE driver d
        SET dest_name='$dest',d.end='$cmb',car_id=$cid 
        where d_id=$did");

        
        return redirect()->back()->with('flash.message', 'Schedule Added.')->with('flash.class', 'success');
        #return view('manager.layouts.schedules'); //->with('pl',$pl);
    }



    public function dstatus(){
        $id=$_REQUEST['id'];
        $id=2;
        $data=DB::select("SELECT s_time,latitude,longitude,place,status from session where s_id='$id'
        order by s_time  DESC ");
        //print_r($data);
        $drowse=DB::select("SELECT count(drowse) as d
        from session where s_id='$id' and drowse>0");
        //print_r($drowse);
        $visibility=DB::select("SELECT count(visibility) as v
        from session where s_id='$id' and visibility>0");

        $picture=DB::select("SELECT count(picture) as p
        from session where s_id='$id' and picture>0");

        $glare=DB::select("SELECT count(glare) as g
        from session where s_id='$id' and glare>0");

        return Response::json(array('success'=>true,
                                    'data'=>$data,
                                    'dr'=>$drowse,
                                    'vis'=>$visibility,
                                    'pic'=>$picture,
                                    'glare'=>$glare));
    }
}
