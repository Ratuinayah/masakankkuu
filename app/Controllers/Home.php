<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('pages/index.php');
    }
    
    public function about()
    {
        return view('about');
    }
    
    public function faq()
    {
        return view('faq');
    }
    
    public function menu()
    {
        return view('menu');
    }
    
    public function rendang()
    {
        return view('rendang');
    }

}
