<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // Menampilkan "Selamat Datang" di halaman utama (/)
    public function index()
    {
        return 'Selamat Datang';
    }

    // Menampilkan Nama dan NIM di halaman /about
    public function about()
    {
        return 'Nama: Hudha Aji Saputra <br> NIM: 2341760057';
    }

    // Menampilkan halaman artikel dengan ID dinamis
    public function articles($id)
    {
        return 'Halaman Artikel dengan ID ' . $id;
    }

    // Menampilkan "Hello World" di halaman /hello
    public function hello()
    {
        return 'Hello World';
    }
}
