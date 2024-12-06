<?php

namespace App\Http\Controllers;

use App\Models\DsNonprobabilitas;
use Illuminate\Http\Request;

class DsNonprobabilitasController extends Controller
{
    public function index()
    {
        $items = DsNonprobabilitas::all();
        return view('ds_nonprobabilitas.index', compact('items'));
    }

    public function create()
    {
        return view('ds_nonprobabilitas.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'unit_sampel' => 'required|string|max:255',
            'unit_observasi' => 'required|string|max:255',
        ]);

        DsNonprobabilitas::create($validated);
        return redirect()->route('ds_nonprobabilitas.index')->with('success', 'Data berhasil ditambahkan!');
    }

    public function edit(DsNonprobabilitas $dsNonprobabilitas)
    {
        return view('ds_nonprobabilitas.edit', compact('dsNonprobabilitas'));
    }

    public function update(Request $request, DsNonprobabilitas $dsNonprobabilitas)
    {
        $validated = $request->validate([
            'unit_sampel' => 'required|string|max:255',
            'unit_observasi' => 'required|string|max:255',
        ]);

        $dsNonprobabilitas->update($validated);
        return redirect()->route('ds_nonprobabilitas.index')->with('success', 'Data berhasil diperbarui!');
    }

    public function destroy(DsNonprobabilitas $dsNonprobabilitas)
    {
        $dsNonprobabilitas->delete();
        return redirect()->route('ds_nonprobabilitas.index')->with('success', 'Data berhasil dihapus!');
    }
}

