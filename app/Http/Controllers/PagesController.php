<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome to laravel!';
        //return view('pages.index', compact('title'));
        return view('pages.index')->with('title', $title);
    }

    public function about(){
        $title = 'About Us';
        return view('pages.about')->with('title', $title);
    }

    public function services(){
        $data = array(
            'title' => 'Services',
            'services' => ['Pengunjung dapat melakukan register dan login', 'Pengunjung dapat membuat post dan memasukan gambar tentang post tersebut', 'Pengunjung dapat memanage post tersebut']
        );
        return view('pages.services')->with($data);
    }
}
