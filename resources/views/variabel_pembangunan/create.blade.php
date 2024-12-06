<!DOCTYPE html>
<html>
<head>
    <title>Tambah Variabel Pembangunan</title>
</head>
<body>
    <h1>Tambah Variabel Pembangunan</h1>
    <form action="{{ route('variabel_pembangunan.store') }}" method="POST">
        @csrf
        <label>Kegiatan Penghasil:</label>
        <input type="text" name="kegiatan_penghasil" required>

        <label>Kode Keg:</label>
        <input type="text" name="kode_keg" required>

        <label>Nama:</label>
        <input type="text" name="nama" required>

        <label>TTD (Kepala Dinas):</label>
        <select name="id_ttd" required>
            @foreach ($ttds as $ttd)
                <option value="{{ $ttd->id_ttd }}">{{ $ttd->kep_dinas }}</option>
            @endforeach
        </select>

        <button type="submit">Simpan</button>
    </form>
</body>
</html>
