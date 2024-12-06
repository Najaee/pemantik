<!DOCTYPE html>
<html>
<head>
    <title>Data Petugas Pengumpulan Data</title>
</head>
<body>
    <h1>Data Petugas Pengumpulan Data</h1>
    <a href="{{ route('petugas_pengumpulan_data.create') }}">Tambah Data</a>
    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Cara Pengumpulan Data</th>
                <th>Kegiatan Ini Dilakukan</th>
                <th>Frekuensi Penyelenggara</th>
                <th>Tipe Pengumpulan Data</th>
                <th>Metode Pengumpulan Data</th>
                <th>Unit Pengumpulan Data</th>
                <th>Cakupan Wilayah Data</th>
                <th>Wilayah Data</th>
                <th>Pilot Survey</th>
                <th>Metode Pemeriksaan Kualitas</th>
                <th>Penyesuaian Nonresponden</th>
                <th>Petugas Pengumpulan Data</th>
                <th>Persyaratan Petugas</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($petugas as $data)
                <tr>
                    <td>{{ $data->id_petugas_pengumpulan_data }}</td>
                    <td>{{ $data->cara_pengumpulan_data }}</td>
                    <td>{{ $data->kegiatan_ini_dilakukan }}</td>
                    <td>{{ $data->frekuensi_penyelenggara_kegiatan }}</td>
                    <td>{{ $data->tipe_pengumpulan_data }}</td>
                    <td>{{ $data->metode_pengumpulan_data }}</td>
                    <td>{{ $data->unit_pengumpulan_data }}</td>
                    <td>{{ $data->cakupan_wilayah_data }}</td>
                    <td>{{ $data->wilayah_data }}</td>
                    <td>{{ $data->pilot_survey ? 'Ya' : 'Tidak' }}</td>
                    <td>{{ $data->metode_pemeriksaan_kualitas_pengumpulan_data }}</td>
                    <td>{{ $data->penyesuaian_nonresponden ? 'Ya' : 'Tidak' }}</td>
                    <td>{{ $data->petugas_pengumpulan_data }}</td>
                    <td>{{ $data->persyaratan_petugas_pengumpulan_data }}</td>
                    <td>
                        <a href="{{ route('petugas_pengumpulan_data.edit', $data->id_petugas_pengumpulan_data) }}">Edit</a>
                        <form action="{{ route('petugas_pengumpulan_data.destroy', $data->id_petugas_pengumpulan_data) }}" method="POST" style="display:inline;">
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
