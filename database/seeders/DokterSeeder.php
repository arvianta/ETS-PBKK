<?php

namespace Database\Seeders;

use App\Models\Dokter;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DokterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Dokter::insert([
            [
                'name' => 'dr.Rayhan Arvianta',
            ],
            [
                'name' => 'dr.Riello Arviano',
            ]
        ]);
    }
}
