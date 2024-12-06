<?php

namespace App\Http\Controllers;

use App\Models\IndikatorPembangunan;
use Illuminate\Http\Request;

class IndikatorPembangunanController extends Controller
{
    public function index()
    {
        $data = IndikatorPembangunan::all();
        return view('indikator_pembangunan.index', compact('data'));
    }

    public function create()
    {
        return view('indikator_pembangunan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'publikasi_ketersediaan' => 'required|string|max:255',
            'nama' => 'required|string|max:255',
        ]);

        IndikatorPembangunan::create($request->all());
        return redirect()->route('indikator_pembangunan.index')->with('success', 'Data berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $data = IndikatorPembangunan::findOrFail($id);
        return view('indikator_pembangunan.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'publikasi_ketersediaan' => 'required|string|max:255',
            'nama' => 'required|string|max:255',
        ]);

        $data = IndikatorPembangunan::findOrFail($id);
        $data->update($request->all());
        return redirect()->route('indikator_pembangunan.index')->with('success', 'Data berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $data = IndikatorPembangunan::findOrFail($id);
        $data->delete();
        return redirect()->route('indikator_pembangunan.index')->with('success', 'Data berhasil dihapus.');
    }
}
