<!DOCTYPE html>
<html>
<head>
    <title>Daftar MS Var</title>
</head>
<body>
    <h1>Daftar MS Var</h1>
    <a href="{{ route('ms_var.create') }}">Tambah Data</a>
    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Alias</th>
                <th>Referensi Pemilihan</th>
                <th>Detail Kegiatan</th>
                <th>Tipe Data</th>
                <th>Klasifikasi Isian</th>
                <th>Aturan Validasi</th>
                <th>Kalimat Pernyataan</th>
                <th>Kolom 2 Diakses Umum</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td>{{ $item->id_ms_var }}</td>
                    <td>{{ $item->alias }}</td>
                    <td>{{ $item->referensi_pemilihan }}</td>
                    <td>{{ $item->detailKegiatan->id_detail_kegiatan }}</td>
                    <td>{{ $item->tipe_data }}</td>
                    <td>{{ $item->klasifikasi_isian }}</td>
                    <td>{{ $item->aturan_validasi }}</td>
                    <td>{{ $item->kalimat_pernyataan }}</td>
                    <td>{{ $item->kolom_2_diakses_umum ? 'Ya' : 'Tidak' }}</td>
                    <td>
                        <a href="{{ route('ms_var.edit', $item->id_ms_var) }}">Edit</a>
                        <form action="{{ route('ms_var.destroy', $item->id_ms_var) }}" method="POST" style="display:inline;">
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
