<?php

namespace App\Http\Controllers;

use App\Models\MsIndikator;
use App\Models\IndikatorPembangunan;
use App\Models\VariabelPembangunan;
use Illuminate\Http\Request;

class MsIndikatorController extends Controller
{
    public function index()
    {
        $data = MsIndikator::with(['indikatorPembangunan', 'variabelPembangunan'])->get();
        return view('ms_indikator.index', compact('data'));
    }

    public function create()
    {
        $indikatorPembangunans = IndikatorPembangunan::all();
        $variabelPembangunans = VariabelPembangunan::all();
        return view('ms_indikator.create', compact('indikatorPembangunans', 'variabelPembangunans'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'konsep' => 'required|string|max:255',
            'definisi' => 'required|string|max:255',
            'interpretasi' => 'required|string|max:255',
            'metode_rumus_perhitungan' => 'required|string|max:255',
            'ukuran' => 'required|string|max:255',
            'satuan' => 'required|string|max:255',
            'klasifikasi_penyajian' => 'required|string|max:255',
            'indikator_composit' => 'required|boolean',
            'level_estimasi' => 'required|string|max:255',
            'dapat_diakses_umum' => 'required|boolean',
            'id_indikator_pembangunan' => 'required|exists:indikator_pembangunan,id_indikator_pembangunan',
            'id_variabel_pembangunan' => 'required|exists:variabel_pembangunan,id_variabel_pembangunan',
        ]);

        MsIndikator::create($request->all());
        return redirect()->route('ms_indikator.index')->with('success', 'Data berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $data = MsIndikator::findOrFail($id);
        $indikatorPembangunans = IndikatorPembangunan::all();
        $variabelPembangunans = VariabelPembangunan::all();
        return view('ms_indikator.edit', compact('data', 'indikatorPembangunans', 'variabelPembangunans'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'konsep' => 'required|string|max:255',
            'definisi' => 'required|string|max:255',
            'interpretasi' => 'required|string|max:255',
            'metode_rumus_perhitungan' => 'required|string|max:255',
            'ukuran' => 'required|string|max:255',
            'satuan' => 'required|string|max:255',
            'klasifikasi_penyajian' => 'required|string|max:255',
            'indikator_composit' => 'required|boolean',
            'level_estimasi' => 'required|string|max:255',
            'dapat_diakses_umum' => 'required|boolean',
            'id_indikator_pembangunan' => 'required|exists:indikator_pembangunan,id_indikator_pembangunan',
            'id_variabel_pembangunan' => 'required|exists:variabel_pembangunan,id_variabel_pembangunan',
        ]);

        $data = MsIndikator::findOrFail($id);
        $data->update($request->all());
        return redirect()->route('ms_indikator.index')->with('success', 'Data berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $data = MsIndikator::findOrFail($id);
        $data->delete();
        return redirect()->route('ms_indikator.index')->with('success', 'Data berhasil dihapus.');
    }
}
