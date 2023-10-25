<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    use HasFactory;

    protected $table = 'dokter';

    protected $fillable = [
        'name',
    ];

    public function rekam_medis()
    {
        return $this->hasMany(Rekam_Medis::class, 'dokter_id');
    }
}
