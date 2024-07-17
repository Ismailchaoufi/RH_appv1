<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendControllerAdmin extends Controller
{
    public function index(){
        return view('RH.dashboard.dashboard');
    }
}
