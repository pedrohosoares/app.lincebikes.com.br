<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Job;
use Illuminate\Http\Request;

class LogController extends Controller
{
    public function get()
    {

    }

    public function insert(Request $request){
        $data = $request->all();
        Job::create(['data'=>$data,'name'=>'logs']);
    }

    public function update(Request $request){

    }
}
