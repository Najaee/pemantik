<?php

namespace App\Http\Controllers;

use App\Models\VariabelPembangunan;
use App\Models\Ttd;
use Illuminate\Http\Request;

class VariabelPembangunanController extends Controller
{
    public function index()
    {
        $data = VariabelPembangunan::with('ttd')->get();
        return view('variabel_pembangunan.index', compact('data'));
    }

    public function create()
    {
        $ttds = Ttd::all(); // Ambil data dari tabel ttd
        return view('variabel_pembangunan.create', compact('ttds'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'kegiatan_penghasil' => 'required|string|max:255',
            'kode_keg' => 'required|string|max:255',
            'nama' => 'required|string|max:255',
            'id_ttd' => 'required|exists:ttd,id_ttd',
        ]);

        VariabelPembangunan::create($request->all());
        return redirect()->route('variabel_pembangunan.index')->with('success', 'Data berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $data = VariabelPembangunan::findOrFail($id);
        $ttds = Ttd::all();
        return view('variabel_pembangunan.edit', compact('data', 'ttds'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'kegiatan_penghasil' => 'required|string|max:255',
            'kode_keg' => 'required|string|max:255',
            'nama' => 'required|string|max:255',
            'id_ttd' => 'required|exists:ttd,id_ttd',
        ]);

        $data = VariabelPembangunan::findOrFail($id);
        $data->update($request->all());
        return redirect()->route('variabel_pembangunan.index')->with('success', 'Data berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $data = VariabelPembangunan::findOrFail($id);
        $data->delete();
        return redirect()->route('variabel_pembangunan.index')->with('success', 'Data berhasil dihapus.');
    }
}
