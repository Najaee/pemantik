<!DOCTYPE html>
<html>
<head>
    <title>Data Penanggung Jawab Kegiatan</title>
</head>
<body>
    <h1>Data Penanggung Jawab Kegiatan</h1>
    <a href="{{ route('pj_kegiatan.create') }}">Tambah Penanggung Jawab</a>
    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Unit Kerja</th>
                <th>Jabatan</th>
                <th>Alamat</th>
                <th>Telepon</th>
                <th>Email</th>
                <th>Fax</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pjKegiatans as $pjKegiatan)
                <tr>
                    <td>{{ $pjKegiatan->id_pj_kegiatan }}</td>
                    <td>{{ $pjKegiatan->nama }}</td>
                    <td>{{ $pjKegiatan->unit_kerja }}</td>
                    <td>{{ $pjKegiatan->jabatan }}</td>
                    <td>{{ $pjKegiatan->alamat }}</td>
                    <td>{{ $pjKegiatan->telepon }}</td>
                    <td>{{ $pjKegiatan->email }}</td>
                    <td>{{ $pjKegiatan->fax }}</td>
                    <td>
                        <a href="{{ route('pj_kegiatan.edit', $pjKegiatan->id_pj_kegiatan) }}">Edit</a>
                        <form action="{{ route('pj_kegiatan.destroy', $pjKegiatan->id_pj_kegiatan) }}" method="POST" style="display:inline;">
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
