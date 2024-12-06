<?php

namespace App\Http\Controllers;

use App\Models\Ttd;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TtdController extends Controller
{
    public function index()
    {
        $data = Ttd::all();
        return view('ttd.index', compact('data'));
    }

    public function create()
    {
        return view('ttd.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'waktu_tempat' => 'required|string|max:255',
            'kep_dinas' => 'required|string|max:255',
            'nip' => 'required|string|max:255',
            'ttd_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Proses upload file
        $path = $request->file('ttd_image')->store('ttd_images', 'public');

        // Simpan data ke database
        Ttd::create([
            'waktu_tempat' => $request->waktu_tempat,
            'kep_dinas' => $request->kep_dinas,
            'nip' => $request->nip,
            'ttd_image' => $path,
        ]);

        return redirect()->route('ttd.index')->with('success', 'Data berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $data = Ttd::findOrFail($id);
        return view('ttd.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'waktu_tempat' => 'required|string|max:255',
            'kep_dinas' => 'required|string|max:255',
            'nip' => 'required|string|max:255',
            'ttd_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = Ttd::findOrFail($id);

        // Proses update file jika ada
        if ($request->hasFile('ttd_image')) {
            // Hapus file lama
            Storage::disk('public')->delete($data->ttd_image);

            // Upload file baru
            $path = $request->file('ttd_image')->store('ttd_images', 'public');
            $data->ttd_image = $path;
        }

        $data->update([
            'waktu_tempat' => $request->waktu_tempat,
            'kep_dinas' => $request->kep_dinas,
            'nip' => $request->nip,
        ]);

        return redirect()->route('ttd.index')->with('success', 'Data berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $data = Ttd::findOrFail($id);

        // Hapus file gambar
        Storage::disk('public')->delete($data->ttd_image);

        $data->delete();

        return redirect()->route('ttd.index')->with('success', 'Data berhasil dihapus.');
    }
}
