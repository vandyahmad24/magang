<?php

namespace App\Http\Controllers;
use Barryvdh\DomPDF\Facade as PDF;
use App\Models\Absensi;
use App\Models\ProfileUpload;
use App\Models\ProfileUser;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $pengajuan = User::where('level','magang')->where('status_magang','pengajuan')->latest()->count();
        $penilaian = User::where('level','magang')->where('status_magang','setuju')->where('nilai',0)->latest()->count();
        $konfirmasi = User::where('level','magang')->where('status_magang','setuju')->where('is_confirmation','0')->count();
        return view('admin.dashboard',compact('pengajuan','penilaian','konfirmasi'));
    }
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
    public function konfirmasi()
    {
        $user = User::where('level','magang')->where('status_magang','setuju')->where('is_confirmation','0')->latest()->get();
        return view('admin.konfirmasi',compact('user'));
    }
    public function konfirmasiStatus($id)
    {
       $user = User::find($id);
       $user->is_confirmation=1;
       $user->save();
       return redirect('daftar_pelamar_konfirmasi');
    }
    public function detailPelamar($id)
    {
        $user =User::find($id);
        $profile = ProfileUser::where('user_id',$id)->first();
        $upload = ProfileUpload::where('user_id',$id)->first();
        return view('admin.pelamar_detail',compact('user','profile','upload'));
        // dd($user);
    }
    public function deletePeserta($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('/admin/rekap-perbulan');
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
        // $absensi = Absensi::with('user')->latest()->get();
        $peserta = User::where('level','magang')->latest()->get();
        // dd($peserta);
        return view('admin.absensi',compact('peserta'));
        // dd($absensi);
    }

    public function absensiDetail($id)
    {
        $absensi = Absensi::with('user')->where('user_id',$id)->latest()->get();
        return view('admin.absensi_detail',compact('absensi'));
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
    public function cetakRekapPerbulan($tanggal_awal, $tanggal_akhir)
    {
        $user = User::where('level','magang')->whereBetween('created_at', [$tanggal_awal, $tanggal_akhir])->latest()->get();
        $pdf = PDF::loadview('surat.rekap',compact('user','tanggal_awal','tanggal_akhir'));
        return $pdf->stream('rekap.pdf');
    }
    public function editPeserta($id)
    {
        $user = User::find($id);
        $profile = ProfileUser::where('user_id',$id)->first();
        if($profile!=null){
            $upload = ProfileUpload::where('user_id',$id)->first();
            return view('admin.edit_peserta', compact('user','profile','upload'));
        }else{
            return view('admin.edit_belum_komplit', compact('user','profile'));
        }
        // dd($profile);
        
    }
    public function AlasanTolak($id)
    {
        $user = User::find($id);
        return view('admin.alasan_tolak', compact('user'));
    }
    public function AlasanTolakPost(Request $request)
    {
        $user =User::find($request->id);
        $user->status_magang = "tolak";
        $user->alasan_tolak = $request->alasan_tolak;
        $user->save();
        return redirect('/daftar_pelamar');
    }

    
}
