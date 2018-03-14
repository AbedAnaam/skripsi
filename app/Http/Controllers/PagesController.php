<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $title = 'Website UPT Balai Latihan Kerja Kabupaten Gunungkidul';
        return view('pages.index')->with('title', $title);
    }

    public function profile()
    {
        $title = 'Profile BLK Gunungkidul';
        return view('pages.profile')->with('title', $title);
    }

    public function kejuruan()
    {
        $title = 'Daftar Kejuruan BLK Gunungkidul';
        return view('pages.kejuruan')->with('title', $title);
    }

    public function pendaftaran()
    {
        $title = 'Pendaftaran Peserta Pelatihan BLK Gunungkidul';
        return view('pages.pendaftaran')->with('title', $title);
    }
}
