<!DOCTYPE html>
<html>
<head>
    <title>Data Detail Kegiatan</title>
</head>
<body>
    <h1>Data Detail Kegiatan</h1>
    <a href="{{ route('detail_kegiatan.create') }}">Tambah Data</a>
    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>ID Kegiatan</th>
                <th>ID Penyelenggara</th>
                <th>ID PJ Kegiatan</th>
                <th>ID PJ Teknis Kegiatan</th>
                <th>ID Walidata</th>
                <th>ID PJ Jadwal Kegiatan</th>
                <th>ID Var Utama yang Digunakan</th>
                <th>ID Jumlah Pengumpulan Data</th>
                <th>ID Rancangan Laporan Publikasi</th>
                <th>ID Metode Pengolahan</th>
                <th>ID Produk Data untuk Umum</th>
                <th>ID Petugas Pengumpulan Data</th>
                <th>ID Desain Sampel</th>
                <th>ID DS Nonprobabilitas</th>
                <th>ID DS Probabilitas</th>
                <th>ID Indikator Pembangunan</th>
                <th>ID Variabel Pembangunan</th>
                <th>ID MS Indikator</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($detailKegiatans as $item)
                <tr>
                    <td>{{ $item->id_detail_kegiatan }}</td>
                    <td>{{ $item->id_kegiatan }}</td>
                    <td>{{ $item->id_penyelenggara }}</td>
                    <td>{{ $item->id_pj_kegiatan }}</td>
                    <td>{{ $item->id_pj_teknis_kegiatan }}</td>
                    <td>{{ $item->id_walidata }}</td>
                    <td>{{ $item->id_pj_jadwal_kegiatan }}</td>
                    <td>{{ $item->id_var_utama_yg_digunakan }}</td>
                    <td>{{ $item->id_jml_pengumpulan_data }}</td>
                    <td>{{ $item->id_rancangan_lap_publikasi }}</td>
                    <td>{{ $item->id_metode_pengolahan }}</td>
                    <td>{{ $item->id_produk_data_utk_umum }}</td>
                    <td>{{ $item->id_petugas_pengumpulan_data }}</td>
                    <td>{{ $item->id_ds }}</td>
                    <td>{{ $item->id_ds_nonprobabilitas }}</td>
                    <td>{{ $item->id_ds_probabilitas }}</td>
                    <td>{{ $item->id_indikator_pembangunan }}</td>
                    <td>{{ $item->id_variabel_pembangunan }}</td>
                    <td>{{ $item->id_ms_indikator }}</td>
                    <td>
                        <a href="{{ route('detail_kegiatan.edit', $item->id_detail_kegiatan) }}">Edit</a>
                        <form action="{{ route('detail_kegiatan.destroy', $item->id_detail_kegiatan) }}" method="POST" style="display:inline;">
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
