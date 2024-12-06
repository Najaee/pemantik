<!DOCTYPE html>
<html>
<head>
    <title>Daftar Indikator Pembangunan</title>
</head>
<body>
    <h1>Daftar Indikator Pembangunan</h1>
    <a href="{{ route('indikator_pembangunan.create') }}">Tambah Data</a>
    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif
    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Publikasi Ketersediaan</th>
                <th>Nama</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td>{{ $item->id_indikator_pembangunan }}</td>
                    <td>{{ $item->publikasi_ketersediaan }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>
                        <a href="{{ route('indikator_pembangunan.edit', $item->id_indikator_pembangunan) }}">Edit</a>
                        <form action="{{ route('indikator_pembangunan.destroy', $item->id_indikator_pembangunan) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
