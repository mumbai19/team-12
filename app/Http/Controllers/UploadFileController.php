<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class UploadFileController extends Controller {
   public function index() {
      return view('community_member.importcsv');
   }
   public function showUploadFile(Request $request) {
      $file = $request->file('csv');
   
      //Display File Name
      echo 'File Name: '.$file->getClientOriginalName();
      echo '<br>';
   
      //Display File Extension
      echo 'File Extension: '.$file->getClientOriginalExtension();
      echo '<br>';
   
      //Display File Real Path
      echo 'File Real Path: '.$file->getRealPath();
      echo '<br>';
   
      //Display File Size
      echo 'File Size: '.$file->getSize();
      echo '<br>';
   
      //Display File Mime Type
      echo 'File Mime Type: '.$file->getMimeType();
   
      //Move Uploaded File
      //$destinationPath = '/dataimports/';
      //$file->move($destinationPath,$file->getClientOriginalName());
      $csv = array_map('str_getcsv', file($file->getRealPath()));
      //dd($csv);
      //dd($csv[0][0]);
      $this->importCsv($csv);
   }

   public function importCsv($customerArr)
    {
        for ($i = 0; $i < count($customerArr); $i ++)
        {
            //App\User::firstOrCreate($customerArr[$i]);
            $user = new \App\User;
            //dd($customerArr[$i][0]);
            $user->name = $customerArr[$i][0];
            $user->email = $customerArr[$i][1];
            $user->contact = $customerArr[$i][2];
            $user->address = $customerArr[$i][3];
            $user->pincode = $customerArr[$i][4];
            $user->is_verified = $customerArr[$i][5];
            $user->role = $customerArr[$i][6];
            $user->password = $customerArr[$i][7];
            $user->save();
        }

        return 'Jobi done or what ever';    
    }

}