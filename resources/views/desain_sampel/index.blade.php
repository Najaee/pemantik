<!DOCTYPE html>
<html>
<head>
    <title>Data Desain Sampel</title>
</head>
<body>
    <h1>Data Desain Sampel</h1>
    <a href="{{ route('desain_sampel.create') }}">Tambah Desain Sampel</a>
    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Metode Pemilihan Sampel Akhir</th>
                <th>Metode yang Digunakan</th>
                <th>Jenis Rancangan Sampel</th>
                <th>Sarana Pengumpulan Data</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($desainSampels as $desainSampel)
                <tr>
                    <td>{{ $desainSampel->id_ds }}</td>
                    <td>{{ $desainSampel->metode_pemilihan_sampel_akhir }}</td>
                    <td>{{ $desainSampel->metode_yg_digunakan }}</td>
                    <td>{{ $desainSampel->jenis_rancangan_sampel }}</td>
                    <td>{{ $desainSampel->sarana_pengumpulan_data }}</td>
                    <td>
                        <a href="{{ route('desain_sampel.edit', $desainSampel->id_ds) }}">Edit</a>
                        <form action="{{ route('desain_sampel.destroy', $desainSampel->id_ds) }}" method="POST" style="display:inline;">
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
