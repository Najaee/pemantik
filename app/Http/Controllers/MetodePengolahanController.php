<?php

namespace App\Http\Controllers;

use App\Models\MetodePengolahan;
use Illuminate\Http\Request;

class MetodePengolahanController extends Controller
{
    public function index()
    {
        $data = MetodePengolahan::all();
        return view('metode_pengolahan.index', compact('data'));
    }

    public function create()
    {
        return view('metode_pengolahan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'editing' => 'required|string|max:255',
            'coding' => 'required|string|max:255',
            'input_data' => 'required|string|max:255',
            'penyahihan' => 'required|string|max:255',
            'microdata_rawdata' => 'required|string|max:255',
            'metode_lain' => 'nullable|string|max:255',
            'metode_analisis' => 'required|string|max:255',
            'unit_analisis' => 'required|string|max:255',
            'tingkat_penyajian_data' => 'required|string|max:255',
        ]);

        MetodePengolahan::create($request->all());
        return redirect()->route('metode_pengolahan.index')->with('success', 'Data berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $data = MetodePengolahan::findOrFail($id);
        return view('metode_pengolahan.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'editing' => 'required|string|max:255',
            'coding' => 'required|string|max:255',
            'input_data' => 'required|string|max:255',
            'penyahihan' => 'required|string|max:255',
            'microdata_rawdata' => 'required|string|max:255',
            'metode_lain' => 'nullable|string|max:255',
            'metode_analisis' => 'required|string|max:255',
            'unit_analisis' => 'required|string|max:255',
            'tingkat_penyajian_data' => 'required|string|max:255',
        ]);

        $data = MetodePengolahan::findOrFail($id);
        $data->update($request->all());
        return redirect()->route('metode_pengolahan.index')->with('success', 'Data berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $data = MetodePengolahan::findOrFail($id);
        $data->delete();
        return redirect()->route('metode_pengolahan.index')->with('success', 'Data berhasil dihapus.');
    }
}
