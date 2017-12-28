<?php

namespace App\Http\Controllers\pastorControllers;
use App\Http\Controllers\Controller;
use DB;

use Illuminate\Http\Request;

class PastorApp extends Controller
{
    public function pastorapp (Request $request)
    {
        $pilgrim_id = $request->query('pilgrim_id');
        $sponsor_id = $request->query('sponsor_id');
        $pilgrim_info = DB::table('pilgrim_info')
            ->where('id', $pilgrim_id)
            ->first();
        $sponsor_info = DB::table('sponsor_info')
            ->where('id', $sponsor_id)
            ->first();

        return view('pastor/pastorapp')->with(compact('pilgrim_info', 'sponsor_info'));

    }

    public function pastorappsuccess ()
    {
       return view('pastor/pastorappsuccess');

    }
}
