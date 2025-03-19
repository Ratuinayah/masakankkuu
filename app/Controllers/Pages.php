<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        return view('pages/index');
    }

    public function about()
    {
        return view('pages/about');
    }
    
    public function faq()
    {
        return view('pages/faq');
    }
    
    public function menu()
    {
        return view('pages/menu');
    }
    
    public function sapi()
    {
        return view('pages/sapi');
    }
    
    public function ayam()
    {
        return view('pages/ayam');
    }
    
    public function babi()
    {
        return view('pages/babi');
    }
    
    public function kambing()
    {
        return view('pages/kambing');
    }
}
