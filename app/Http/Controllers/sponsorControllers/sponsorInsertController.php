<?php

namespace App\Http\Controllers\sponsorControllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use DB;

class SponsorInsertController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function insert(Request $req)
    {
      $fullname = $req->input('fullname');
      $address = $req->input('address');
      $city = $req->input('city');
      $state = $req->input('state');
      $zip = $req->input('zip');
      $phone = $req->input('phone');
      $email = $req->input('email');
      $bestcalltime = $req->input('bestcalltime');
      $applicantname = $req->input('applicantname');
      $baptizedlutheran = $req->input('baptizedlutheran');
      $hadcursillospousediscussion = $req->input('hadcursillospousediscussion');
      $bothspousesattending = $req->input('bothspousesattending');
      $singlespouseexplanation = $req->input('singlespouseexplanation');
      $cursilloattitude = $req->input('cursilloattitude');
      $plantosupport = $req->input('plantosupport');
      $otherapplicantinfo = $req->input('otherapplicantinfo');
      $goodcandidatereason = $req->input('goodcandidatereason');
      $applicantexpectations = $req->input('applicantexpectations');
      $signed = $req->input('signed');
      $datesigned = $req->input('datesigned');


      $data = array(
        'fullname'=>$fullname,
        'address'=>$address,
        'city'=>$city,
        'state'=>$state,
        'zip'=>$zip,
        'phone'=>$phone,
        'email'=>$email,
        'bestcalltime'=>$bestcalltime,
        'applicantname'=>$applicantname,
        'baptizedlutheran' =>$baptizedlutheran,
        'hadcursillospousediscussion' =>$hadcursillospousediscussion,
        'bothspousesattending' =>$bothspousesattending,
        'singlespouseexplanation' =>$singlespouseexplanation,
        'cursilloattitude' =>$cursilloattitude,
        'plantosupport' =>$plantosupport,
        'otherapplicantinfo' =>$otherapplicantinfo,
        'goodcandidatereason' =>$goodcandidatereason,
        'applicantexpectations' =>$applicantexpectations,
        'signed'=>$signed,
        'datesigned'=>$datesigned
      );
      DB::table('sponsor_info')->insert($data);
      return redirect('sponsor/sponsorappsuccess');
    }
}
