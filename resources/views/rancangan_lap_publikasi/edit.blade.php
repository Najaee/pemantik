@extends('layouts.app')

@section('content')
<h1>Edit Rancangan Laporan Publikasi</h1>
<form action="{{ route('rancangan_lap_publikasi.update', $data->id_rancangan_lap_publikasi) }}" method="POST">
    @csrf
    @method('PUT')
    <div>
        <label>Rancangan Output:</label>
        <input type="text" name="rancangan_output" value="{{ $data->rancangan_output }}" required>
    </div>
    <div>
        <label>Rancangan Deskripsi Variabel:</label>
        <textarea name="rancangan_deskripsi_var" required>{{ $data->rancangan_deskripsi_var }}</textarea>
    </div>
    <button type="submit">Simpan</button>
</form>
@endsection
