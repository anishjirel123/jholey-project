<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function gethome(){
        return view ('site.home');
    }

    public function getabout(){
        return view ('site.about');
    }

    // public function getserivce(){
    //     return view ('site.service');
    // }

    // public function getgallery(){
    //     return view ('site.gallery');
    // }

    // public function getcontact(){
    //     return view ('site.contact');
    // }
}
