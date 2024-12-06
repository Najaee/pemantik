<?php

namespace App\Http\Controllers;

use App\Models\PjTeknisKegiatan;
use Illuminate\Http\Request;

class PjTeknisKegiatanController extends Controller
{
    public function index()
    {
        $pjTeknisKegiatans = PjTeknisKegiatan::all();
        return view('pj_teknis_kegiatan.index', compact('pjTeknisKegiatans'));
    }

    public function create()
    {
        return view('pj_teknis_kegiatan.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'alamat' => 'required|string',
            'telepon' => 'nullable|string|max:20',
            'email' => 'required|email|unique:pj_teknis_kegiatans,email',
            'fax' => 'nullable|string|max:20',
        ]);

        PjTeknisKegiatan::create($validated);
        return redirect()->route('pj_teknis_kegiatan.index')->with('success', 'Penanggung Jawab Teknis Kegiatan berhasil ditambahkan!');
    }

    public function edit(PjTeknisKegiatan $pjTeknisKegiatan)
    {
        return view('pj_teknis_kegiatan.edit', compact('pjTeknisKegiatan'));
    }

    public function update(Request $request, PjTeknisKegiatan $pjTeknisKegiatan)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'alamat' => 'required|string',
            'telepon' => 'nullable|string|max:20',
            'email' => 'required|email|unique:pj_teknis_kegiatans,email,' . $pjTeknisKegiatan->id_pj_teknis_kegiatan . ',id_pj_teknis_kegiatan',
            'fax' => 'nullable|string|max:20',
        ]);

        $pjTeknisKegiatan->update($validated);
        return redirect()->route('pj_teknis_kegiatan.index')->with('success', 'Penanggung Jawab Teknis Kegiatan berhasil diperbarui!');
    }

    public function destroy(PjTeknisKegiatan $pjTeknisKegiatan)
    {
        $pjTeknisKegiatan->delete();
        return redirect()->route('pj_teknis_kegiatan.index')->with('success', 'Penanggung Jawab Teknis Kegiatan berhasil dihapus!');
    }
}
