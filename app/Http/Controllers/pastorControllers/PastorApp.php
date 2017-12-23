<?php

namespace App\Http\Controllers\pastorControllers;
use App\Http\Controllers\Controller;
use DB;

use Illuminate\Http\Request;

class PastorApp extends Controller
{
    public function pastorapp ()
    {
        $sponsor_pilgrim_pairs = DB::table('pilgrim_info')
            ->join('sponsor_info', 'pilgrim_info.sponsor_id', '=', 'sponsor_info.id')
            ->select('pilgrim_info.id', 'pilgrim_info.firstname', 'sponsor_info.fullname')
            ->get();

       return view('pastor/pastorapp')->with(compact('$sponsor_pilgrim_pairs'));

    }

    public function pastorappsuccess ()
    {
       return view('pastor/pastorappsuccess');

    }
}
