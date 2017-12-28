<?php

namespace App\Http\Controllers\pastorControllers;
use App\Http\Controllers\Controller;
use DB;

use Illuminate\Http\Request;

class PastorApp extends Controller
{
    public function pastordashboard() {
        // Collection of Sponsor/Pilgrim pairs
        $sponsor_pilgrim_pairs = DB::table('pilgrim_info')
            ->join('sponsor_info', 'pilgrim_info.sponsor_id', '=', 'sponsor_info.id')
            ->select('pilgrim_info.id',
                'pilgrim_info.firstname',
                'pilgrim_info.lastname',
                'sponsor_info.id as sponsor_id',
                'sponsor_info.fullname'
            )
            ->get();

        return view('pastor/pastordashboard')->with(compact('sponsor_pilgrim_pairs'));

    }
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
