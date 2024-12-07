<!DOCTYPE html>
<html>
<head>
    <title>Daftar Desain Sampel</title>
</head>
<body>
    <h1>Daftar Desain Sampel</h1>
    <a href="{{ route('desain_sampel.create') }}">Tambah Desain Sampel</a><br><br>

    <table border="1" cellpadding="5">
        <thead>
            <tr>
                <th>No</th>
                <th>Metode Pemilihan Sampel Akhir</th>
                <th>Metode yang Digunakan</th>
                <th>Jenis Rancangan Sampel</th>
                <th>Sarana Pengumpulan Data</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($desainSampels as $key => $desainSampel)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $desainSampel->metode_pemilihan_sampel_akhir }}</td>
                    <td>{{ $desainSampel->metode_yg_digunakan }}</td>
                    <td>{{ $desainSampel->jenis_rancangan_sampel }}</td>
                    <td>{{ $desainSampel->sarana_pengumpulan_data }}</td>
                    <td>
                        <a href="{{ route('desain_sampel.edit', $desainSampel->id_ds) }}">Edit</a> |
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
