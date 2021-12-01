<?php

namespace App\Http\Controllers;

use App\Models\Device;
use Illuminate\Http\Request;

class DeviceController extends Controller
{
    //
    public function index(Device $key) {
        return $key;
    }

    // Post api
    function add(Request $request) {
        $device = new Device;
        $device->name = $request->name;
        $device->member_id = $request->member_id;
        $result = $device->save();

        if($result){
            return ["Result"=>"Data save successfully"];
        }else{
            return ["Result"=>"Operation failed"];
        }
        
    }
}
