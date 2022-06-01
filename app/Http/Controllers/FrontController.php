<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function pendaftar()
    {
        $user = User::where('level','magang')->where('status_magang','setuju')->where('is_selesai',false)->with('document')->latest()->get();
        // dd($user);
       return view('front.pendaftar',compact('user'));
    }
    public function pengumuman()
    {
        $user = User::where('level','magang')->with('document')->latest()->get();
        return view('front.pengumuman',compact('user'));
    }
    public function informasi()
    {
        return view('front.informasi');
    }
}

