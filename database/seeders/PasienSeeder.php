<?php

namespace Database\Seeders;

use App\Models\Pasien;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PasienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pasien::insert([
            [
                'name' => 'Rayhan Arvianta',
            ],
            [
                'name' => 'Riello Arviano',
            ]
        ]);
    }
}
