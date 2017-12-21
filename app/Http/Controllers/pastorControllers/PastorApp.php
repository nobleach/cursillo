<?php

namespace App\Http\Controllers\pastorControllers;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PastorApp extends Controller
{
    public function pastorapp ()
    {
       return view('pastor/pastorapp');

    }

    public function pastorappsuccess ()
    {
       return view('pastor/pastorappsuccess');

    }
}
