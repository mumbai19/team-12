<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class expertsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function readData(){
        $videos= DB::select('select * from videos where expert_id=4');
        
        return view('experts.expert')->with('videos',$videos);
    }

    public function givePersonalisedAdvice(Request $request){
        $advice = $request->input('message');
        $type = $request->input('type');
        DB::table('personalised_advice')->insert(
            ['expert_id' => 4, 'farmer_id' => 5, 'data' => $advice, 'comment' => $type]
        );
    
        return 1;
    }

    public function addVideos(Request $request){
        $url = $request->input('url');
        $tags = $request->input('type');
        $language = $request->input('language');

        DB::table('videos')->insert(
            ['url' => $url, 'tags' => $tags, 'language' => $language, 'expert_id' => 4]
        );
	
        return 1;
    }

    public function addAdvice(Request $request){
        $advice = $request->input('advice');
        DB::table('wheather_advice')->insert(
            ['advice' => $advice]
        );
	
        return 1;
    }

}