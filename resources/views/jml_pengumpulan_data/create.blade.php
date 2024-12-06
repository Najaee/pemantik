@extends('layouts.app')

@section('content')
<h1>Tambah Pengumpulan Data</h1>
<form action="{{ route('jml_pengumpulan_data.store') }}" method="POST">
    @csrf
    <div>
        <label>Supervisor:</label>
        <input type="number" name="supervisor" required>
    </div>
    <div>
        <label>Enum:</label>
        <input type="number" name="enum" required>
    </div>
    <div>
        <label>Pelatihan Pengumpul Data:</label>
        <input type="text" name="pelatihan_pengumpul_data" required>
    </div>
    <button type="submit">Simpan</button>
</form>
@endsection
