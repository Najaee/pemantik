<!DOCTYPE html>
<html>
<head>
    <title>Jadwal Kegiatan</title>
</head>
<body>
    <h1>Data Jadwal Kegiatan</h1>
    <a href="{{ route('pj_jadwal_kegiatan.create') }}">Tambah Jadwal</a>
    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Perencanaan/Persiapan</th>
                <th>Desain</th>
                <th>Pengumpulan Data</th>
                <th>Pengolahan</th>
                <th>Analisis</th>
                <th>Diseminasi</th>
                <th>Evaluasi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($jadwals as $jadwal)
                <tr>
                    <td>{{ $jadwal->id_pj_jadwal_kegiatan }}</td>
                    <td>{{ $jadwal->perencanaan_persiapan }}</td>
                    <td>{{ $jadwal->desain }}</td>
                    <td>{{ $jadwal->pengumpulan_data }}</td>
                    <td>{{ $jadwal->pengolahan }}</td>
                    <td>{{ $jadwal->analisis }}</td>
                    <td>{{ $jadwal->diseminasi }}</td>
                    <td>{{ $jadwal->evaluasi }}</td>
                    <td>
                        <a href="{{ route('pj_jadwal_kegiatan.edit', $jadwal->id_pj_jadwal_kegiatan) }}">Edit</a>
                        <form action="{{ route('pj_jadwal_kegiatan.destroy', $jadwal->id_pj_jadwal_kegiatan) }}" method="POST" style="display:inline;">
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
