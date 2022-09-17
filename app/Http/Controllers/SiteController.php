<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function gethome(){
        return view ('site.Home');
    }

    
    public function getAbouts(){
        return view ('site.About');
    }

    
    public function getService(){
        return view('site.Service');
    }

    public function getContact(){
        return view('site.Contact');
    }

    public function getReadmore(){
        return view('site.readmore');
    }

    public function getMore(){
        return view('site.more');
    }

}
