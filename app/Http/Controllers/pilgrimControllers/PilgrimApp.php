<?php

namespace App\Http\Controllers\pilgrimControllers;
use App\Http\Controllers\Controller;
use DB;

use Illuminate\Http\Request;

class PilgrimApp extends Controller
{
    public function pilgrimapp ()
    {
        function getSponsors() {
            return DB::table('sponsor_info')->get()->pluck('fullname', 'id');
        }

        $sponsors = getSponsors();

        return view('pilgrim/pilgrimapp')->with(compact('sponsors'));

    }

    public function pilgrimappsuccess ()
    {
       return view('pilgrim/pilgrimappsuccess');

    }
}
