<!DOCTYPE html>
<html>
<head>
    <title>Daftar MS Indikator</title>
</head>
<body>
    <h1>Daftar MS Indikator</h1>
    <a href="{{ route('ms_indikator.create') }}">Tambah Data</a>
    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif
    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Konsep</th>
                <th>Definisi</th>
                <th>Interpretasi</th>
                <th>Metode/Rumus Perhitungan</th>
                <th>Ukuran</th>
                <th>Satuan</th>
                <th>Klasifikasi Penyajian</th>
                <th>Indikator Composit</th>
                <th>Level Estimasi</th>
                <th>Dapat Diakses Umum</th>
                <th>Indikator Pembangunan</th>
                <th>Variabel Pembangunan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td>{{ $item->id_ms_indikator }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->konsep }}</td>
                    <td>{{ $item->definisi }}</td>
                    <td>{{ $item->interpretasi }}</td>
                    <td>{{ $item->metode_rumus_perhitungan }}</td>
                    <td>{{ $item->ukuran }}</td>
                    <td>{{ $item->satuan }}</td>
                    <td>{{ $item->klasifikasi_penyajian }}</td>
                    <td>{{ $item->indikator_composit ? 'Ya' : 'Tidak' }}</td>
                    <td>{{ $item->level_estimasi }}</td>
                    <td>{{ $item->dapat_diakses_umum ? 'Ya' : 'Tidak' }}</td>
                    <td>{{ $item->indikatorPembangunan->nama }}</td>
                    <td>{{ $item->variabelPembangunan->nama }}</td>
                    <td>
                        <a href="{{ route('ms_indikator.edit', $item->id_ms_indikator) }}">Edit</a>
                        <form action="{{ route('ms_indikator.destroy', $item->id_ms_indikator) }}" method="POST" style="display:inline;">
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
