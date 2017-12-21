<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function insert(Request $req)
    {
      $fullname = $req->input('fullname');
      $churchname = $req->input('churchname');
      $address = $req->input('address');
      $city = $req->input('city');
      $state = $req->input('state');
      $zip = $req->input('zip');
      $phone = $req->input('phone');
      $email = $req->input('email');
      $goodcandidateexplanation = $req->input('goodcandidateexplanation');
      $signed = $req->input('signed');
      $date = $req->input('date');

      $dat = array(
        'fullname'=>$fullname,
        'churchname'=>$churchname,
        'address'=>$address,
        'city'=>$city,
        'state'=>$state,
        'zip'=>$zip,
        'phone'=>$phone,
        'email'=>$email,
        'goodcandidateexplanation'=>$goodcandidateexplanation,
        'signed'=>$signed,
        'date'=>$date
      );
      DB::table('pastor_info')->insert($data);
      echo "Thank you for submitting your Pastor Application";
    }
}
