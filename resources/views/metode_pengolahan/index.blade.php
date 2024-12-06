@extends('layouts.app')

@section('content')
<div>
    <h1>Daftar Metode Pengolahan</h1>
    <a href="{{ route('metode_pengolahan.create') }}">Tambah Data</a>
    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif
    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Editing</th>
                <th>Coding</th>
                <th>Input Data</th>
                <th>Penyahihan</th>
                <th>Microdata/Rawdata</th>
                <th>Metode Lain</th>
                <th>Metode Analisis</th>
                <th>Unit Analisis</th>
                <th>Tingkat Penyajian Data</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td>{{ $item->id_metode_pengolahan }}</td>
                    <td>{{ $item->editing }}</td>
                    <td>{{ $item->coding }}</td>
                    <td>{{ $item->input_data }}</td>
                    <td>{{ $item->penyahihan }}</td>
                    <td>{{ $item->microdata_rawdata }}</td>
                    <td>{{ $item->metode_lain }}</td>
                    <td>{{ $item->metode_analisis }}</td>
                    <td>{{ $item->unit_analisis }}</td>
                    <td>{{ $item->tingkat_penyajian_data }}</td>
                    <td>
                        <a href="{{ route('metode_pengolahan.edit', $item->id_metode_pengolahan) }}">Edit</a>
                        <form action="{{ route('metode_pengolahan.destroy', $item->id_metode_pengolahan) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
