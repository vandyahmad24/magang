<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfileUser extends Model
{
    use HasFactory;
    protected $fillable = [
        'tanggal_lahir',
        'tempat_lahir',
        'jenis_kelamin',
        'fakultasi',
        'alat_kampus',
        'start_magang',
        'selesai_magang',
        'user_id',
        'alamat',
        'no_telpon'
        
    ];
    protected $table = 'profile_user';
}
