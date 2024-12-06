<?php

namespace App\Http\Controllers;

use App\Models\Walidata;
use Illuminate\Http\Request;

class WalidataController extends Controller
{
    public function index()
    {
        $walidatas = Walidata::all();
        return view('walidata.index', compact('walidatas'));
    }

    public function create()
    {
        return view('walidata.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'unit_kerja_walidata' => 'required|string|max:255',
            'email' => 'required|email|unique:walidatas,email',
        ]);

        Walidata::create($validated);
        return redirect()->route('walidata.index')->with('success', 'Walidata berhasil ditambahkan!');
    }

    public function edit(Walidata $walidata)
    {
        return view('walidata.edit', compact('walidata'));
    }

    public function update(Request $request, Walidata $walidata)
    {
        $validated = $request->validate([
            'unit_kerja_walidata' => 'required|string|max:255',
            'email' => 'required|email|unique:walidatas,email,' . $walidata->id_walidata . ',id_walidata',
        ]);

        $walidata->update($validated);
        return redirect()->route('walidata.index')->with('success', 'Walidata berhasil diperbarui!');
    }

    public function destroy(Walidata $walidata)
    {
        $walidata->delete();
        return redirect()->route('walidata.index')->with('success', 'Walidata berhasil dihapus!');
    }
}
