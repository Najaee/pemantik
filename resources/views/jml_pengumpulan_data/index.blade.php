@extends('layouts.app')

@section('content')
<div>
    <h1>Daftar Pengumpulan Data</h1>
    <a href="{{ route('jml_pengumpulan_data.create') }}">Tambah Data</a>
    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif
    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Supervisor</th>
                <th>Enum</th>
                <th>Pelatihan Pengumpul Data</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td>{{ $item->id_jml_pengumpulan_data }}</td>
                    <td>{{ $item->supervisor }}</td>
                    <td>{{ $item->enum }}</td>
                    <td>{{ $item->pelatihan_pengumpul_data }}</td>
                    <td>
                        <a href="{{ route('jml_pengumpulan_data.edit', $item->id_jml_pengumpulan_data) }}">Edit</a>
                        <form action="{{ route('jml_pengumpulan_data.destroy', $item->id_jml_pengumpulan_data) }}" method="POST" style="display:inline;">
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
