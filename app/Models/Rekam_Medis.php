<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rekam_Medis extends Model
{
    use HasFactory;

    protected $table = 'rekam_medis';

    protected $fillable = [
        'user_id',
        'pasien_id',
        'dokter_id',
        'kondisi_kesehatan',
        'suhu_tubuh',
        'resep',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function pasien()
    {
        return $this->belongsTo(Pasien::class, 'pasien_id');
    }

    public function dokter()
    {
        return $this->belongsTo(Dokter::class, 'dokter_id');
    }
}
