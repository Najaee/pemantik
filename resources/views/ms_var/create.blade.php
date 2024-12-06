<!DOCTYPE html>
<html>
<head>
    <title>Tambah MS Var</title>
</head>
<body>
    <h1>Tambah MS Var</h1>
    <form action="{{ route('ms_var.store') }}" method="POST">
        @csrf
        <label>Alias:</label>
        <input type="text" name="alias" required><br>

        <label>Referensi Pemilihan:</label>
        <input type="text" name="referensi_pemilihan" required><br>

        <label>Detail Kegiatan:</label>
        <select name="id_detail_kegiatan" required>
            @foreach ($detailKegiatans as $detail)
                <option value="{{ $detail->id_detail_kegiatan }}">{{ $detail->id_detail_kegiatan }}</option>
            @endforeach
        </select><br>

        <label>Tipe Data:</label>
        <input type="text" name="tipe_data" required><br>

        <label>Klasifikasi Isian:</label>
        <input type="text" name="klasifikasi_isian" required><br>

        <label>Aturan Validasi:</label>
        <input type="text" name="aturan_validasi" required><br>

        <label>Kalimat Pernyataan:</label>
        <input type="text" name="kalimat_pernyataan" required><br>

        <label>Kolom 2 Diakses Umum:</label>
        <select name="kolom_2_diakses_umum" required>
            <option value="1">Ya</option>
            <option value="0">Tidak</option>
        </select><br>

        <button type="submit">Simpan</button>
    </form>
</body>
</html>
