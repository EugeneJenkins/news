<?php


namespace App\Http\Controllers;


class IndexController extends Controller
{
    public function show(){
        return view('index');
    }

    public function register(){
        return view('auth.reg');
    }
}
