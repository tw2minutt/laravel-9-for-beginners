<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class HomeController extends BaseController
{
    public function validateform(Request $request){
        echo "<pre>";
            print_r($request->all());
        echo "</pre>";

        $this->validation($request,[
            'title'=>'required|max:250',
        ]);
    }
}
