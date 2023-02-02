<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class landingController extends Controller
{
    public function index(){
        return view('landing.home');
    }
    public function infografis(){
        return view('landing.infografis');
    }
    public function layanan(){
        return view('landing.layanan');
    }
    public function profile(){
        return view('landing.profile');
    }
    public function struktur(){
        return view('landing.struktur');
    }
    public function penghargaan(){
        return view('landing.penghargaan');
    }
    public function berita(){
        return view('landing.berita');
    }
    public function geografis(){
        return view('landing.geografis');
    }
    public function pegawai(){
        return view('landing.pegawai');
    }
    public function panduan(){
        return view('landing.panduan');
    }
    public function cek_pengajuan_surat(){
        return view('landing.cek-pengajuan-surat');
    }
}
