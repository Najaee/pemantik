<?php

namespace App\Http\Controllers;

use App\Models\PjKegiatan;
use Illuminate\Http\Request;

class PjKegiatanController extends Controller
{
    public function index()
    {
        $pjKegiatans = PjKegiatan::all();
        return view('pj_kegiatan.index', compact('pjKegiatans'));
    }

    public function create()
    {
        return view('pj_kegiatan.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'unit_kerja' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'alamat' => 'required|string',
            'telepon' => 'nullable|string|max:20',
            'email' => 'required|email|unique:pj_kegiatans,email',
            'fax' => 'nullable|string|max:20',
        ]);

        PjKegiatan::create($validated);
        return redirect()->route('pj_kegiatan.index')->with('success', 'Penanggung Jawab Kegiatan berhasil ditambahkan!');
    }

    public function edit(PjKegiatan $pjKegiatan)
    {
        return view('pj_kegiatan.edit', compact('pjKegiatan'));
    }

    public function update(Request $request, PjKegiatan $pjKegiatan)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'unit_kerja' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'alamat' => 'required|string',
            'telepon' => 'nullable|string|max:20',
            'email' => 'required|email|unique:pj_kegiatans,email,' . $pjKegiatan->id_pj_kegiatan . ',id_pj_kegiatan',
            'fax' => 'nullable|string|max:20',
        ]);

        $pjKegiatan->update($validated);
        return redirect()->route('pj_kegiatan.index')->with('success', 'Penanggung Jawab Kegiatan berhasil diperbarui!');
    }

    public function destroy(PjKegiatan $pjKegiatan)
    {
        $pjKegiatan->delete();
        return redirect()->route('pj_kegiatan.index')->with('success', 'Penanggung Jawab Kegiatan berhasil dihapus!');
    }
}
