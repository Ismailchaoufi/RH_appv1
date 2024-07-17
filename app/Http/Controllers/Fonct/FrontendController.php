<?php

namespace App\Http\Controllers\Fonct;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        return view('Fonctionnaire.dashboard.dashboard');
    }
}
