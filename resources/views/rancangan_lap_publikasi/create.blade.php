@extends('layouts.app')

@section('content')
<h1>Tambah Rancangan Laporan Publikasi</h1>
<form action="{{ route('rancangan_lap_publikasi.store') }}" method="POST">
    @csrf
    <div>
        <label>Rancangan Output:</label>
        <input type="text" name="rancangan_output" required>
    </div>
    <div>
        <label>Rancangan Deskripsi Variabel:</label>
        <textarea name="rancangan_deskripsi_var" required></textarea>
    </div>
    <button type="submit">Simpan</button>
</form>
@endsection
