<?php

namespace App\Http\Controllers;

use App\Models\Absensi;
use App\Models\ProfileUpload;
use App\Models\ProfileUser;
use App\Models\User;
use Carbon\Carbon;
use DateTime;
use DateTimeZone;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function formulir()
    {
       return view('user.formulir');
    }
    public function formulirPost(Request $request, $id)
    {
        $user = User::find($id);
        // dd($user);
        $user->universitas=$request->universitas;
        $user->save();
        // dd($request->all());
        $profile = $request->all();
        $profile['user_id']=$id;
        $old = ProfileUser::where('user_id',$id)->first();
        if($old==null){
            ProfileUser::create($profile);
        }else{
            $old->update($profile);
        }
        
        return redirect('home');
    }

    public function formulirUpdate($id)
    {
        $profile = ProfileUser::find($id);
        return view('user.formulir_update',compact('profile'));
    }

    public function formulirPut(Request $request, $id)
    {
        $user = User::find($id);
        // dd($user);
        $user->universitas=$request->universitas;
        $user->save();
        // dd($request->all());
        $profile = $request->all();
        $profile['user_id']=$id;
        $old = ProfileUser::where('user_id',$id)->first();
        if($old==null){
            ProfileUser::create($profile);
        }else{
            $old->update($profile);
        }
        
        return redirect('home');
    }

    public function berkas()
    {
        return view('user.berkas');
    }
    
    public function berkasPost(Request $request)
    {
        $this->validate($request, [
            'surat_magang' => 'mimes:pdf|required|max:10000',
			'kesbangkol' => 'mimes:pdf|required|max:10000',
            'foto_diri' => 'mimes:pdf|required|max:10000',
            'ktm' => 'mimes:jpg,jpeg,png|required|max:10000',
		]);

        $pu = new ProfileUpload;
        $user = User::find(Auth::user()->id);
        $user->status_magang="pengajuan";
        $user->save();

        $surat_magang = $request->file('surat_magang');
        $surat_magang_nama = "surat_magang".time()."_".$surat_magang->getClientOriginalName();
        $tujuan_upload = 'uploads';
        $surat_magang->move($tujuan_upload,$surat_magang_nama);
        $pu->user_id=Auth::user()->id;
        $pu->surat_magang = $surat_magang_nama;

        $kesbangkol = $request->file('kesbangkol');
        $kesbangkol_nama = "kesbangkol".time()."_".$kesbangkol->getClientOriginalName();
        $tujuan_upload = 'uploads';
        $kesbangkol->move($tujuan_upload,$kesbangkol_nama);
        $pu->kesbangkol = $kesbangkol_nama;

        $ktm = $request->file('ktm');
        $ktm_nama = "ktm".time()."_".$ktm->getClientOriginalName();
        $tujuan_upload = 'uploads';
        $ktm->move($tujuan_upload,$ktm_nama);
        $pu->ktm = $ktm_nama;

        $foto_diri = $request->file('foto_diri');
        $foto_diri_nama = "foto_diri".time()."_".$foto_diri->getClientOriginalName();
        $tujuan_upload = 'uploads';
        $foto_diri->move($tujuan_upload,$foto_diri_nama);
        $pu->foto_diri = $foto_diri_nama;
       
        $pu->save();


        return redirect('home');
    }
    public function berkasUpdate($id)
    {
        $upload = ProfileUpload::find($id);
        return view('user.berkas_update',compact('upload'));
    }
    public function berkasPut(Request $request, $id)
    {
        $this->validate($request, [
            'surat_magang' => 'mimes:pdf|max:10000',
			'kesbangkol' => 'mimes:pdf|max:10000',
            'foto_diri' => 'mimes:pdf|max:10000',
            'ktm' => 'mimes:jpg,jpeg,png|max:10000',
		]);
        $upload = ProfileUpload::find($id);
        if($request->file('surat_magang')){
            $surat_magang = $request->file('surat_magang');
            $surat_magang_nama = "surat_magang".time()."_".$surat_magang->getClientOriginalName();
            $tujuan_upload = 'uploads';
            $surat_magang->move($tujuan_upload,$surat_magang_nama);
            $upload->surat_magang = $surat_magang_nama;

        }

        if($request->file('kesbangkol')){
            $kesbangkol = $request->file('kesbangkol');
            $kesbangkol_nama = "kesbangkol".time()."_".$kesbangkol->getClientOriginalName();
            $tujuan_upload = 'uploads';
            $kesbangkol->move($tujuan_upload,$kesbangkol_nama);
            $upload->kesbangkol = $kesbangkol_nama;
        }

        if($request->file('foto_diri')){
            $foto_diri = $request->file('foto_diri');
            $foto_diri_nama = "foto_diri".time()."_".$foto_diri->getClientOriginalName();
            $tujuan_upload = 'uploads';
            $foto_diri->move($tujuan_upload,$foto_diri_nama);
            $upload->foto_diri = $foto_diri_nama;
        }

        if($request->file('ktm')){
            $ktm = $request->file('ktm');
            $ktm_nama = "ktm".time()."_".$ktm->getClientOriginalName();
            $tujuan_upload = 'uploads';
            $ktm->move($tujuan_upload,$ktm_nama);
            $upload->ktm = $ktm_nama;
        }


        $upload->save();
        return redirect('home');
    }

    public function validasi()
    {
        $id = Auth::user()->id;
        $formulir = ProfileUpload::where('user_id',$id)->first();
        return view('user.validasi',compact('formulir'));
    }
    public function absensi()
    {

        if(Auth::user()->status_magang=="setuju" && Auth::user()->is_confirmation==1){
            $a = Absensi::whereDate('created_at', Carbon::today())
                            ->where('user_id',Auth::user()->id)
                            ->first();
                            // dd($a);
            
                            // dd($a);
            return view('user.absensi',compact('a'));
        }else{
            return view('user.need_validasi');
        }
    }
    public function absensiStatus($status)
    {
        $datetime = new DateTime( "now", new DateTimeZone( "Asia/Jakarta" ));
        $a = new Absensi;
        $a->user_id = Auth::user()->id;
        $a->absensi = $datetime;
        $a->status = $status;
        $a->save();
        return redirect('/user-absensi');
    }
    public function hasilMagang()
    {
        $id = Auth::user()->id;
        $user = User::where('is_selesai',true)->get();
        return view('user.pengumuman',compact('user'));
        
    }
    public function pengumuman()
    {
        return view('user.pengumuman-after');
    }
  
}
