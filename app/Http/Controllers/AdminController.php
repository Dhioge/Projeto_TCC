<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function index($demopage = 'index')
    {
        return view('admin.' . $demopage)->with(['page' => $demopage]);
    }
}
