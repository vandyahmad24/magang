<?php

namespace App\Http\Controllers;

use App\Models\ProfileUpload;
use App\Models\ProfileUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // ambil profile
        $id = Auth::user()->id;
        $profile = ProfileUser::where('user_id',$id)->first();
        $upload = ProfileUpload::where('user_id',$id)->first();


        return view('home',compact('profile','upload'));
    }
}
