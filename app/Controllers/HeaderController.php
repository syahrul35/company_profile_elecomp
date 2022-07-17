<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class HeaderController extends BaseController
{
    public function index()
    {
        return view('/login');
    }

    public function beranda()
    {
        return view('/tampilan/beranda/beranda');
    }

    public function slider()
    {
        return view('/tampilan/slider/slider');
    }

    public function tentang()
    {
        return view('/tampilan/tentang/tentang');
    }

    public function kontak()
    {
        return view('/tampilan/kontak/kontak');
    }

    public function layanan()
    {
        return view('/tampilan/layanan/layanan');
    }

    public function kategori()
    {
        return view('/tampilan/kategori/kategori');
    }

    public function galeri()
    {
        return view('/tampilan/galeri/galeri');
    }

    public function album()
    {
        return view('/tampilan/album/album');
    }

    public function logout()
    {
        return view('/login');
    }
}
