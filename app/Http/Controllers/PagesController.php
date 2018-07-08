<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function index(){
        $data=array(
            'title'=>'hello!!'
        );
        return view('pages.index')->with('data',$data);
    }
    public function about(){
        return view('pages.about');
    }
    public function services(){
        return view('pages.services');
    }
}
