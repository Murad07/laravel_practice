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

    // Put api
    function update(Request $req) {
        $device = Device::find($req->id);
        $device->name = $req->name;
        $device->member_id = $req->member_id;
        $result = $device->save();

        if($result){
            return ["Result"=>"Data is updated"];
        }else{
            return ["Result"=>"Operation failed"];
        }
        
    }

    // Delete api
    function delete($id){
        $device = Device::find($id);
        $result = $device->delete();
        
        if($result){
            return ["Result"=>"record has been delete"];
        }else{
            return ["Result"=>"Operation failed"]; 
        }
    }
}
