<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class PostController extends Controller
{
    public function index(){
        return view('crossinformation/cross-information-first');
    }
    
    public function power(){
        return view('crosstec/cross-company-technology-information');
    }
    
    public function ya(){
        return view('crossinformation/cross-information-first');
    }
}
