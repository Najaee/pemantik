<!DOCTYPE html>
<html>
<head>
    <title>Data Penanggung Jawab Teknis Kegiatan</title>
</head>
<body>
    <h1>Data Penanggung Jawab Teknis Kegiatan</h1>
    <a href="{{ route('pj_teknis_kegiatan.create') }}">Tambah Penanggung Jawab</a>
    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Jabatan</th>
                <th>Alamat</th>
                <th>Telepon</th>
                <th>Email</th>
                <th>Fax</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pjTeknisKegiatans as $pjTeknisKegiatan)
                <tr>
                    <td>{{ $pjTeknisKegiatan->id_pj_teknis_kegiatan }}</td>
                    <td>{{ $pjTeknisKegiatan->nama }}</td>
                    <td>{{ $pjTeknisKegiatan->jabatan }}</td>
                    <td>{{ $pjTeknisKegiatan->alamat }}</td>
                    <td>{{ $pjTeknisKegiatan->telepon }}</td>
                    <td>{{ $pjTeknisKegiatan->email }}</td>
                    <td>{{ $pjTeknisKegiatan->fax }}</td>
                    <td>
                        <a href="{{ route('pj_teknis_kegiatan.edit', $pjTeknisKegiatan->id_pj_teknis_kegiatan) }}">Edit</a>
                        <form action="{{ route('pj_teknis_kegiatan.destroy', $pjTeknisKegiatan->id_pj_teknis_kegiatan) }}" method="POST" style="display:inline;">
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
