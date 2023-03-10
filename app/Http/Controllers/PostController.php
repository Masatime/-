<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class PostController extends Controller
{
    public function open(){
        return view('cross-open/cross-open');
    }
    
    public function roguin(){
        return view('cross-open/cross-roguin');
    }
    
    public function rarara(Request $request){
        $a='6799tsuji-cross';
        $b=$request->rogurogu;
        if($a == $b){
            return redirect('/toukou');
        }else{
            return view('cross-open/cross-era');
        }
        
        
        
        
    }
    
    public function power(){
        return view('crosstec/cross-company-technology-information');
    }
    
    public function ya(){
        return view('crossinformation/cross-information-first');
    }
    
    public function ka(){
        return view('cross-syouhin/cross-syouhin-information-all');
    }
    public function crossfan(){
        return view('cross-syouhin/cross-syouhin-information-crossfan');
    }
    public function syokuryou(){
        return view('cross-syouhin/cross-syouhin-information-syokuryou');
    }
    public function kamera(){
        return view('cross-syouhin/cross-syouhin-information-kamera');
    }
    public function car(){
        return view('cross-syouhin/cross-syouhin-information-car');
    }
    public function sisaku(){
        return view('cross-syouhin/cross-syouhin-information-sisaku');
    }
}
