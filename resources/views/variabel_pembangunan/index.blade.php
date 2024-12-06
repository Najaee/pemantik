<!DOCTYPE html>
<html>
<head>
    <title>Daftar Variabel Pembangunan</title>
</head>
<body>
    <h1>Daftar Variabel Pembangunan</h1>
    <a href="{{ route('variabel_pembangunan.create') }}">Tambah Data</a>
    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif
    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Kegiatan Penghasil</th>
                <th>Kode Keg</th>
                <th>Nama</th>
                <th>Kepala Dinas (TTD)</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td>{{ $item->id_variabel_pembangunan }}</td>
                    <td>{{ $item->kegiatan_penghasil }}</td>
                    <td>{{ $item->kode_keg }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->ttd->kep_dinas }}</td>
                    <td>
                        <a href="{{ route('variabel_pembangunan.edit', $item->id_variabel_pembangunan) }}">Edit</a>
                        <form action="{{ route('variabel_pembangunan.destroy', $item->id_variabel_pembangunan) }}" method="POST" style="display:inline;">
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
