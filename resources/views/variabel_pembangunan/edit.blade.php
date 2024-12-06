<!DOCTYPE html>
<html>
<head>
    <title>Edit Variabel Pembangunan</title>
</head>
<body>
    <h1>Edit Variabel Pembangunan</h1>
    <form action="{{ route('variabel_pembangunan.update', $data->id_variabel_pembangunan) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Kegiatan Penghasil:</label>
        <input type="text" name="kegiatan_penghasil" value="{{ $data->kegiatan_penghasil }}" required>

        <label>Kode Keg:</label>
        <input type="text" name="kode_keg" value="{{ $data->kode_keg }}" required>

        <label>Nama:</label>
        <input type="text" name="nama" value="{{ $data->nama }}" required>

        <label>TTD (Kepala Dinas):</label>
        <select name="id_ttd" required>
            @foreach ($ttds as $ttd)
                <option value="{{ $ttd->id_ttd }}" {{ $data->id_ttd == $ttd->id_ttd ? 'selected' : '' }}>
                    {{ $ttd->kep_dinas }}
                </option>
            @endforeach
        </select>

        <button type="submit">Simpan</button>
    </form>
</body>
</html>
