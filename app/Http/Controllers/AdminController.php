<?php

namespace App\Http\Controllers;

use App\Models\Absensi;
use App\Models\ProfileUpload;
use App\Models\ProfileUser;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function pelamar()
    {
        $user = User::where('level','magang')->where('status_magang','pengajuan')->latest()->get();
        // dd($user);
        return view('admin.pelamar',compact('user'));
    }
    public function tolak()
    {
        $user = User::where('level','magang')->where('status_magang','tolak')->latest()->get();
        return view('admin.tolak',compact('user'));
    }
    public function detailPelamar($id)
    {
        $user =User::find($id);
        $profile = ProfileUser::where('user_id',$id)->first();
        $upload = ProfileUpload::where('user_id',$id)->first();
        return view('admin.pelamar_detail',compact('user','profile','upload'));
        // dd($user);
    }
    public function changeStatusPelamar($id, $status)
    {
        $user =User::find($id);
        $user->status_magang = $status;
        $user->save();
        return redirect('/daftar_pelamar');
    }
    public function penilaian()
    {
        $user = User::where('level','magang')->where('status_magang','setuju')->latest()->get();
        return view('admin.setuju',compact('user'));
    }
    public function penilaianDetail($id)
    {
        $user =User::find($id);
        $profile = ProfileUser::where('user_id',$id)->first();
        $upload = ProfileUpload::where('user_id',$id)->first();
        return view('admin.penilaian_detail',compact('user','profile','upload'));
    }
    public function penilaianPost(Request $request, $id)
    {
       $user = User::find($id);
       $user->nilai= $request->nilai;
       $user->is_selesai=true;
       $user->save();
       return redirect('/daftar_penilaian');
    }
    public function absensi()
    {
        $absensi = Absensi::with('user')->latest()->get();
        return view('admin.absensi',compact('absensi'));
        // dd($absensi);
    }
    public function rekapPerbulan(Request $request)
    {
        
        $now = date('m/d/Y');
        // dd($now);
        $start = Carbon::createFromFormat('m/d/Y', $now)
                        ->firstOfMonth()
                        ->format('Y-m-d');
        $end = Carbon::createFromFormat('m/d/Y', $now)
                        ->lastOfMonth()
                        ->format('Y-m-d');
        if ($request->has('tanggal_awal')) {
            $start = $request->tanggal_awal;
        }
        if ($request->has('tanggal_akhir')) {
            $end = $request->tanggal_akhir;
        }
        // dd($end);
        $user = User::where('level','magang')->whereBetween('created_at', [$start, $end])->latest()->get();
        // dd($user);
        return view('admin.rekap_awal', compact('start','end','user'));
    }
}
