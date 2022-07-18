<?php

namespace App\Controllers\user;

use App\Controllers\BaseController;

class NavbarUserController extends BaseController
{
    public function beranda()
    {
        return view('user/beranda');
    }

    public function tentang()
    {
        return view('user/tentang');
    }

    public function produk()
    {
        return view('user/produk');
    }

    public function galeri()
    {
        return view('user/galeri');
    }

    public function kontak()
    {
        return view('user/hubungi');
    }
}
