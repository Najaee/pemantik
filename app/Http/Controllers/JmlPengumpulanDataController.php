<?php

namespace App\Http\Controllers;

use App\Models\JmlPengumpulanData;
use Illuminate\Http\Request;

class JmlPengumpulanDataController extends Controller
{
    public function index()
    {
        $data = JmlPengumpulanData::all();
        return view('jml_pengumpulan_data.index', compact('data'));
    }

    public function create()
    {
        return view('jml_pengumpulan_data.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'supervisor' => 'required|integer|min:1',
            'enum' => 'required|integer|min:1',
            'pelatihan_pengumpul_data' => 'required|string|max:255',
        ]);

        JmlPengumpulanData::create($request->all());
        return redirect()->route('jml_pengumpulan_data.index')->with('success', 'Data berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $data = JmlPengumpulanData::findOrFail($id);
        return view('jml_pengumpulan_data.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'supervisor' => 'required|integer|min:1',
            'enum' => 'required|integer|min:1',
            'pelatihan_pengumpul_data' => 'required|string|max:255',
        ]);

        $data = JmlPengumpulanData::findOrFail($id);
        $data->update($request->all());
        return redirect()->route('jml_pengumpulan_data.index')->with('success', 'Data berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $data = JmlPengumpulanData::findOrFail($id);
        $data->delete();
        return redirect()->route('jml_pengumpulan_data.index')->with('success', 'Data berhasil dihapus.');
    }
}
