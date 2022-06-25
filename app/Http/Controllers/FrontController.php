<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

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
    public function forgetPassword(Request $request)
    {
        $email = User::where('email',$request->email)->first();
        if($email == null){
            return Redirect::back()->withErrors(['msg' => 'Email tidak ditemukan']);
        }
        $email->password = Hash::make('Perumdapdam');
        $email->save();
        return redirect()->back()->with('success', 'Password sudah menjadi default password silahkan hubungi admin untuk mengetahui default password');   

    }
}

