@extends('layouts.app')

@section('content')
<div>
    <h1>Daftar Rancangan Laporan Publikasi</h1>
    <a href="{{ route('rancangan_lap_publikasi.create') }}">Tambah Data</a>
    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif
    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Rancangan Output</th>
                <th>Rancangan Deskripsi Variabel</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td>{{ $item->id_rancangan_lap_publikasi }}</td>
                    <td>{{ $item->rancangan_output }}</td>
                    <td>{{ $item->rancangan_deskripsi_var }}</td>
                    <td>
                        <a href="{{ route('rancangan_lap_publikasi.edit', $item->id_rancangan_lap_publikasi) }}">Edit</a>
                        <form action="{{ route('rancangan_lap_publikasi.destroy', $item->id_rancangan_lap_publikasi) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
