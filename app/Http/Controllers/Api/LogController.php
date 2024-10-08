<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Job;
use Illuminate\Http\Request;

class LogController extends Controller
{
    public function get(Job $job)
    {
        return response($job->get(),200);
    }

    public function insert(Request $request){
        $data = $request->all();
        $save = Job::create(['data'=>$data,'name'=>'logs']);
        if($save)
        {
            return response(['data'=>['status'=>'success']],201);
        }
    }

    public function update(Request $request){

    }
}
