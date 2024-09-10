<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function tentang()
    {
        return view('tentang');
    }


    public function berita()
    {
        return view('berita');
    }

    public function galeri()
    {
        return view('galeri');
    }

    public function kontak()
    {
        return view('kontak');
    }

    public function template()
    {
        return view('layouts.template');
    }

    public function login()
    {
        return view('login');
    }
}  