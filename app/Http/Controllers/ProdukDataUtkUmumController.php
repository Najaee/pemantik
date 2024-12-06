<?php

namespace App\Http\Controllers;

use App\Models\ProdukDataUtkUmum;
use Illuminate\Http\Request;

class ProdukDataUtkUmumController extends Controller
{
    public function index()
    {
        $data = ProdukDataUtkUmum::all();
        return view('produk_data_utk_umum.index', compact('data'));
    }

    public function create()
    {
        return view('produk_data_utk_umum.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'spublikasi_tercetak' => 'required|string|max:255',
            'publikasi_elektronik' => 'required|string|max:255',
            'publikasi_data_mikro' => 'required|string|max:255',
        ]);

        ProdukDataUtkUmum::create($request->all());
        return redirect()->route('produk_data_utk_umum.index')->with('success', 'Data berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $data = ProdukDataUtkUmum::findOrFail($id);
        return view('produk_data_utk_umum.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'spublikasi_tercetak' => 'required|string|max:255',
            'publikasi_elektronik' => 'required|string|max:255',
            'publikasi_data_mikro' => 'required|string|max:255',
        ]);

        $data = ProdukDataUtkUmum::findOrFail($id);
        $data->update($request->all());
        return redirect()->route('produk_data_utk_umum.index')->with('success', 'Data berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $data = ProdukDataUtkUmum::findOrFail($id);
        $data->delete();
        return redirect()->route('produk_data_utk_umum.index')->with('success', 'Data berhasil dihapus.');
    }
}
