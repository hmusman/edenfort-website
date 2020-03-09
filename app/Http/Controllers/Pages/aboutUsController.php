<?php

namespace App\Http\Controllers\Pages;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class aboutUsController extends Controller
{
    //
    public function index(){

    	return view('Pages.aboutUs');
    }

    public function propManagement(){

    	return view('Pages.PropertyManagement');
    }
}
