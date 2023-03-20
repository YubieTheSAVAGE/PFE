<?php

namespace App\Http\Controllers;

use GuzzleHttp\Psr7\Message;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        return inertia(
            'Index/Index',
            [
                'message' => 'Hello from Laravel!'
            ]
        );
    }
    public function show(){
        return inertia('Index/Show');
    }
}
