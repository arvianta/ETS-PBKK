<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rekam_Medis;
use App\Models\Dokter;
use App\Models\Pasien;

class RekamMedisController extends Controller
{
    public function viewCreate()
    {
        $user = auth()->user();

        $pasiens = Pasien::all();
        $dokters = Dokter::all();

        return view('dashboard.create-medis', compact('user', 'pasiens', 'dokters'));
    }

    public function create(Request $request)
    {
        $validatedData = $request->validate([
            'user_id' => 'required',
            'pasien_id' => 'required',
            'dokter_id' => 'required',
            'kondisi_kesehatan' => 'required',
            'suhu_tubuh' => 'required',
            'resep' => 'required',
        ]);

        Rekam_Medis::create($validatedData);

        return redirect()->route('dashboard.create-medis')->with('success', 'Berhasil');
    }

    public function viewAll()
    {
        return view ('dashboard.rekammedis');
    }

    public function getAllPaginated()
    {
        $rekam_medis = Rekam_Medis::paginate(10);
        return view('dashboard.rekammedis', compact('rekam_medis'));
    }

    public function viewMedisDokter()
    {
        return view('dashboard.medisdokter');
    }

    public function viewMedisPasien()
    {
        return view('dashboard.medispasien');
    }

    public function showByDokter($dokter_id)
    {
        $rekam_medis = Rekam_Medis::where('dokter_id', $dokter_id)->paginate(10);

        $dokter = Dokter::find($dokter_id);

        return view('dashboard.medisdokter', compact('rekam_medis', 'dokter'));
    }

    public function showByPasien($pasien_id)
    {
        $rekam_medis = Rekam_Medis::where('pasien_id', $pasien_id)->paginate(10);

        $pasien = Pasien::find($pasien_id);

        return view('dashboard.medispasien', compact('rekam_medis', 'pasien'));
    }

    public function viewUpdate(Rekam_Medis $rekam_medis)
    {
        return view('rekam_medis.edit', compact('rekam_medis'));
    }

    public function update(Request $request, Rekam_Medis $rekam_medis)
    {
        $validatedData = $request->validate([
            'user_id' => 'required',
            'pasien_id' => 'required',
            'dokter_id' => 'required',
            'kondisi_kesehatan' => 'required',
            'suhu_tubuh' => 'required',
            'resep' => 'required',
        ]);

        $rekam_medis->update($validatedData);

        return redirect()->route('rekam_medis.index')->with('success', 'Rekam Medis updated successfully');
    }

    public function delete(Rekam_Medis $rekam_medis)
    {
        $rekam_medis->delete();

        return redirect()->route('rekam_medis.index')->with('success', 'Rekam Medis deleted successfully');
    }
}

