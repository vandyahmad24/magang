<?php

namespace App\Http\Controllers;

use App\Models\ProfileUser;
use App\Models\User;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PrintController extends Controller
{
    public function pendaftaran()
    {
         // dd("halo");
        //  $jadwal = JadwalKalibrasi::where('status_kalibrasi','!=','selesai')->with('alat')->get();
         // dd($jadwal);
         $id = Auth::user()->id;
         $user = User::find($id);
         $profile = ProfileUser::where('user_id',$id)->first();
         $pdf = PDF::loadview('surat.pendaftaran',compact('user','profile'));
         return $pdf->stream('dokumen pendaftaran.pdf');
        // $user = Auth::user();
        // $pdf = PDF::loadView('surat.pendaftaran', compact('user'));
        // return $pdf->download('invoice.pdf');
    }
    public function cetakHasilMagang($id)
    {
        $user = User::find($id);
        $pdf = PDF::loadview('surat.sertifikat',compact('user'))->setPaper('a4', 'landscape');
        return $pdf->stream('sertifikat.pdf');
    }
    public function cetakHasilPengumuman($id)
    {
        $user = User::find($id);
        $profile = ProfileUser::where('user_id',$user->id)->first();
        $pdf = PDF::loadview('surat.penerimaan',compact('user','profile'));
        return $pdf->stream('dokumen penerimaan.pdf');
    }
    public function cetakTolak($id)
    {
        $user = User::find($id);
        $profile = ProfileUser::where('user_id',$user->id)->first();
        $pdf = PDF::loadview('surat.penolakan',compact('user','profile'));
        return $pdf->stream('dokumen penolakan.pdf');
    }
    public function cetakSelesaiMagang($id)
    {
        $user = User::find($id);
        $profile = ProfileUser::where('user_id',$user->id)->first();
        $pdf = PDF::loadview('surat.selesai_magang',compact('user','profile'));
        return $pdf->stream('dokumen selesai magang.pdf');
    }
  

}
