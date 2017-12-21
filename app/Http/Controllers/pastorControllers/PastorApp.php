<?php

namespace App\Http\Controllers\pastorControllers;
use App\Http\Controllers\Controller;
use DB;

use Illuminate\Http\Request;

class PastorApp extends Controller
{
    public function pastorapp ()
    {
       $sponsors_data = DB::table('sponsor_info')->get()->pluck('fullname', 'id');
       $pilgrim_data = DB::table('pilgrim_info')->get()->pluck('fullname', 'id');
       return view('pastor/pastorapp')->with(compact('pilgrim_info', 'sponsors_info'));

    }

    public function pastorappsuccess ()
    {
       return view('pastor/pastorappsuccess');

    }
}
