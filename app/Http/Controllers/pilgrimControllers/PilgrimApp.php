<?php

namespace App\Http\Controllers\pilgrimControllers;
use App\Http\Controllers\Controller;
use DB;

use Illuminate\Http\Request;

class PilgrimApp extends Controller
{
    public function pilgrimapp ()
    {
        $sponsors = DB::table('sponsor_info')->get()->pluck('fullname', 'id');

        return view('pilgrim/pilgrimapp')->with(compact('sponsors'));

    }

    public function pilgrimappsuccess (Request $request, $sponsor_id)
    {

        $success_data = DB::table('pilgrim_info')
            ->join('sponsor_info', 'pilgrim_info.sponsor_id', '=', 'sponsor_info.id')
            ->select('pilgrim_info.id', 'pilgrim_info.firstname', 'pilgrim_info.lastname', 'pilgrim_info.email', 'sponsor_info.fullname')
            ->first();

        return view('pilgrim/pilgrimappsuccess')->with(compact('success_data'));
    }
}
