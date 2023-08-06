<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Http\Controllers\contactscontroller;

class contactscontroller extends Controller
{
    //
    function display(){
        echo"umer";
    }

    function index1(){
        return view('web.index');
    }

    function about1(){
        return view('web.about');
    }

    function contact1(){
        return view('web.contact-us');
    }

    function side1(){
        return view('web.side-bar');
    }
}
