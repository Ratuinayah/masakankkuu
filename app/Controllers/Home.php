<?php

namespace App\Controllers;

use App\Models\MasakankuModel;

class Home extends BaseController
{
    protected $masakankuModel;
    public function __construct()
    {
        $this->masakankuModel = new MasakankuModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Home'
        ];
        
        return view('pages/index', $data);
    }
    
    public function menu()
    {
        $data = [
            'title' => 'Menu',
            'masakanku' => $this->masakankuModel->getMasakanku()
        ];
        return view('pages/menu', $data);
    }
    
    public function faq()
    {
        $data = [
            'title' => 'FAQ'
        ];

        return view('pages/faq', $data);
    }
    
    public function about()
    {
        $data = [
            'title' => 'About'
        ];
        
        return view('pages/about', $data);
    }
    
    public function detail($id)
    {
        $data = [
            'title' => 'Resep',
            'masakanku' => $this->masakankuModel->getMasakanku($id)
        ];


        return view('pages/detail', $data);
    }
    
}
