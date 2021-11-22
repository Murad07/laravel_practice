<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    //
    public function getData(Request $req) {

        $req->validate([
            'username'=>'required',
            'userpassword'=>'required',

        ]);

        return $req->input();
    }
}
