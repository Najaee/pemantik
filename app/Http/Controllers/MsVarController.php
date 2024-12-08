<?php

namespace App\Http\Controllers;

use App\Models\MsVar;
use App\Models\DetailKegiatan;
use Illuminate\Http\Request;

class MsVarController extends Controller
{
    public function index()
    {
        $data = MsVar::with('detailKegiatan')->get();
        return view('ms_var.index', compact('data'));
    }

    public function create()
    {
        $detailKegiatans = DetailKegiatan::all();
        return view('ms_var.create', compact('detailKegiatans'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'alias' => 'required|string|max:255',
            'referensi_pemilihan' => 'required|string|max:255',
            'id_detail_kegiatan' => 'required|exists:detail_kegiatans,id_detail_kegiatan',
            'tipe_data' => 'required|string|max:255',
            'klasifikasi_isian' => 'required|string|max:255',
            'aturan_validasi' => 'required|string|max:255',
            'kalimat_pernyataan' => 'required|string|max:255',
            'kolom_2_diakses_umum' => 'required|boolean',
        ]);

        MsVar::create($request->all());
        return redirect()->route('ms_var.index')->with('success', 'Data berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $data = MsVar::findOrFail($id);
        $detailKegiatans = DetailKegiatan::all();
        return view('ms_var.edit', compact('data', 'detailKegiatans'));
    }

    public function update(Request $request, $id)
    {
        $data = MsVar::findOrFail($id);

        $request->validate([
            'alias' => 'required|string|max:255',
            'referensi_pemilihan' => 'required|string|max:255',
            'id_detail_kegiatan' => 'required|exists:detail_kegiatans,id_detail_kegiatan',
            'tipe_data' => 'required|string|max:255',
            'klasifikasi_isian' => 'required|string|max:255',
            'aturan_validasi' => 'required|string|max:255',
            'kalimat_pernyataan' => 'required|string|max:255',
            'kolom_2_diakses_umum' => 'required|boolean',
        ]);

        $data->update($request->all());
        return redirect()->route('ms_var.index')->with('success', 'Data berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $data = MsVar::findOrFail($id);
        $data->delete();
        return redirect()->route('ms_var.index')->with('success', 'Data berhasil dihapus.');
    }
}
