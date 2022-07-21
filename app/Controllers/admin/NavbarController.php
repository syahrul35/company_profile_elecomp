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
        return view('/admin/beranda/beranda_view');
    }

    public function slider()
    {
        return view('/admin/slider/slider_view');
    }

    public function tentang()
    {
        return view('/admin/tentang/tentang_view');
    }

    public function kontak()
    {
        return view('/admin/kontak/kontak_view');
    }

    public function layanan()
    {
        return view('/admin/layanan/layanan_view');
    }

    public function kategori()
    {
        return view('/admin/kategori/kategori_view');
    }

    public function galeri()
    {
        return view('/admin/galeri/galeri_view');
    }

    public function album()
    {
        return view('/admin/album/album_view');
    }

    public function logout()
    {
        return view('/login');
    }


    // ------------------------- TAMBAH DATA DAN EDIT ------------------------------------ //
    public function edit_slider()
    {
        return view('/admin/slider/slider_edit');
    }

    public function edit_tentang()
    {
        return view('/admin/tentang/tentang_edit');
    }

    public function edit_layanan()
    {
        return view('/admin/layanan/layanan_edit');
    }

    public function edit_kategori()
    {
        return view('/admin/kategori/kategori_edit');
    }

    public function edit_galeri()
    {
        return view('/admin/galeri/galeri_edit');
    }

    public function edit_album()
    {
        return view('/admin/album/album_edit');
    }
}
