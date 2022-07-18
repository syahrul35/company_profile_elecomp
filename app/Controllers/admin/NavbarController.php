<?php

namespace App\Controllers\admin;

use App\Controllers\BaseController;

class NavbarController extends BaseController
{
    public function index()
    {
        return view('/login');
    }

    public function beranda()
    {
        return view('/admin/beranda');
    }

    public function slider()
    {
        return view('/admin/slider');
    }

    public function tentang()
    {
        return view('/admin/tentang');
    }

    public function kontak()
    {
        return view('/admin/kontak');
    }

    public function layanan()
    {
        return view('/admin/layanan');
    }

    public function kategori()
    {
        return view('/admin/kategori');
    }

    public function galeri()
    {
        return view('/admin/galeri');
    }

    public function album()
    {
        return view('/admin/album');
    }

    public function logout()
    {
        return view('/login');
    }
}
