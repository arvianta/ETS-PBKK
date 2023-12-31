<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;

    protected $table = 'pasien';

    protected $fillable = [
        'name',
    ];

    public function rekam_medis()
    {
        return $this->hasMany(Rekam_Medis::class, 'pasien_id');
    }
}
