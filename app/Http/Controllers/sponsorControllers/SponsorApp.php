<?php

namespace App\Http\Controllers\sponsorControllers;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class SponsorApp extends Controller
{
    public function sponsorapp ()
    {
       return view('sponsor/sponsorapp');

    }

    public function sponsorappsuccess ()
    {
       return view('sponsor/sponsorappsuccess');

    }
}
