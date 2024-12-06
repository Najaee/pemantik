<!DOCTYPE html>
<html>
<head>
    <title>Data Kegiatan</title>
</head>
<body>
    <h1>Data Kegiatan</h1>
    <a href="{{ route('kegiatan.create') }}">Tambah Kegiatan</a>
    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tahun</th>
                <th>Judul Kegiatan</th>
                <th>Sektor Kegiatan</th>
                <th>Rekomendasi BPS</th>
                <th>Nomor Rekomendasi</th>
                <th>Latar Belakang</th>
                <th>Tujuan & Manfaat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($kegiatans as $kegiatan)
                <tr>
                    <td>{{ $kegiatan->id_kegiatan }}</td>
                    <td>{{ $kegiatan->tahun }}</td>
                    <td>{{ $kegiatan->judul_kegiatan }}</td>
                    <td>{{ $kegiatan->sektor_kegiatan }}</td>
                    <td>{{ $kegiatan->telah_mendapat_rekomendasi ? 'Ya' : 'Tidak' }}</td>
                    <td>{{ $kegiatan->nomor_rekomendasi }}</td>
                    <td>{{ $kegiatan->latar_belakang }}</td>
                    <td>{{ $kegiatan->tujuan_manfaat }}</td> <!-- Menampilkan Tujuan & Manfaat -->
                    <td>
                        <a href="{{ route('kegiatan.edit', $kegiatan->id_kegiatan) }}">Edit</a>
                        <form action="{{ route('kegiatan.destroy', $kegiatan->id_kegiatan) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
