<!DOCTYPE html>
<html>
<head>
    <title>Edit MS Var</title>
</head>
<body>
    <h1>Edit MS Var</h1>
    <form action="{{ route('ms_var.update', $data->id_ms_var) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Alias:</label>
        <input type="text" name="alias" value="{{ $data->alias }}" required><br>

        <label>Referensi Pemilihan:</label>
        <input type="text" name="referensi_pemilihan" value="{{ $data->referensi_pemilihan }}" required><br>

        <label>Detail Kegiatan:</label>
        <select name="id_detail_kegiatan" required>
            @foreach ($detailKegiatans as $detail)
                <option value="{{ $detail->id_detail_kegiatan }}" {{ $data->id_detail_kegiatan == $detail->id_detail_kegiatan ? 'selected' : '' }}>
                    {{ $detail->id_detail_kegiatan }}
                </option>
            @endforeach
        </select><br>

        <label>Tipe Data:</label>
        <input type="text" name="tipe_data" value="{{ $data->tipe_data }}" required><br>

        <label>Klasifikasi Isian:</label>
        <input type="text" name="klasifikasi_isian" value="{{ $data->klasifikasi_isian }}" required><br>

        <label>Aturan Validasi:</label>
        <input type="text" name="aturan_validasi" value="{{ $data->aturan_validasi }}" required><br>

        <label>Kalimat Pernyataan:</label>
        <input type="text" name="kalimat_pernyataan" value="{{ $data->kalimat_pernyataan }}" required><br>

        <label>Kolom 2 Diakses Umum:</label>
        <select name="kolom_2_diakses_umum" required>
            <option value="1" {{ $data->kolom_2_diakses_umum ? 'selected' : '' }}>Ya</option>
            <option value="0" {{ !$data->kolom_2_diakses_umum ? 'selected' : '' }}>Tidak</option>
        </select><br>

        <button type="submit">Simpan</button>
    </form>
</body>
</html>
