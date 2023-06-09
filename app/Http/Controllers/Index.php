<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Index extends Controller
{
    public function index()
    {
        return inertia('Index/Index', [
            'message' => 'Hello from Laravel',
        ]);
    }

    public function show()
    {
        return inertia('Index/Show');
    }

    public function contact()
    {
        return inertia('Index/Contact');
    }
   
}
