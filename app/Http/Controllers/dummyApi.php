<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dummyApi extends Controller
{
    //
    function getData(){
        return ["name"=>"Murad", "email"=>"murad.pi22@gmail.com"];
    }
}
