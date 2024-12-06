@extends('layouts.app')

@section('content')
<h1>Edit Pengumpulan Data</h1>
<form action="{{ route('jml_pengumpulan_data.update', $data->id_jml_pengumpulan_data) }}" method="POST">
    @csrf
    @method('PUT')
    <div>
        <label>Supervisor:</label>
        <input type="number" name="supervisor" value="{{ $data->supervisor }}" required>
    </div>
    <div>
        <label>Enum:</label>
        <input type="number" name="enum" value="{{ $data->enum }}" required>
    </div>
    <div>
        <label>Pelatihan Pengumpul Data:</label>
        <input type="text" name="pelatihan_pengumpul_data" value="{{ $data->pelatihan_pengumpul_data }}" required>
    </div>
    <button type="submit">Simpan</button>
</form>
@endsection
