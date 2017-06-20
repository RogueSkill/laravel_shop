<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class WebController extends Controller
{
    //首页
    public function index()
    {
        return view("web/index");
    }
}
