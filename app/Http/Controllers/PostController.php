<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Console\View\Components\Task;

class PostController extends BaseController
{
    public function showform() {
        return view('post');
    }
    public function validateform(Request $request) {
        $validatedData = $request->validate([
        'title' => 'required|max:255',
        'description' => 'required',

        
      ]);
      
    }

}
