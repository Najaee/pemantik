<!DOCTYPE html>
<html>
<head>
    <title>Data Penyelenggara</title>
</head>
<body>
    <h1>Data Penyelenggara</h1>
    <a href="{{ route('penyelenggara.create') }}">Tambah Penyelenggara</a>
    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Penanggungjawab</th>
                <th>Perangkat Daerah</th>
                <th>Provinsi</th>
                <th>Kabupaten/Kota</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($penyelenggaras as $penyelenggara)
                <tr>
                    <td>{{ $penyelenggara->id_penyelenggara }}</td>
                    <td>{{ $penyelenggara->penanggungjawab }}</td>
                    <td>{{ $penyelenggara->perangkat_daerah_penyelenggara }}</td>
                    <td>{{ $penyelenggara->provinsi }}</td>
                    <td>{{ $penyelenggara->kabupaten_kota }}</td>
                    <td>{{ $penyelenggara->alamat_lengkap_penyelenggara }}</td>
                    <td>
                        <a href="{{ route('penyelenggara.edit', $penyelenggara->id_penyelenggara) }}">Edit</a>
                        <form action="{{ route('penyelenggara.destroy', $penyelenggara->id_penyelenggara) }}" method="POST" style="display:inline;">
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
