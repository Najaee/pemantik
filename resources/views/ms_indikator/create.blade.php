<!DOCTYPE html>
<html>
<head>
    <title>Tambah MS Indikator</title>
</head>
<body>
    <h1>Tambah MS Indikator</h1>
    <form action="{{ route('ms_indikator.store') }}" method="POST">
        @csrf
        <label>Nama:</label>
        <input type="text" name="nama" required><br>

        <label>Konsep:</label>
        <input type="text" name="konsep" required><br>

        <label>Definisi:</label>
        <input type="text" name="definisi" required><br>

        <label>Interpretasi:</label>
        <input type="text" name="interpretasi" required><br>

        <label>Metode/Rumus Perhitungan:</label>
        <input type="text" name="metode_rumus_perhitungan" required><br>

        <label>Ukuran:</label>
        <input type="text" name="ukuran" required><br>

        <label>Satuan:</label>
        <input type="text" name="satuan" required><br>

        <label>Klasifikasi Penyajian:</label>
        <input type="text" name="klasifikasi_penyajian" required><br>

        <label>Indikator Composit:</label>
        <select name="indikator_composit" required>
            <option value="1">Ya</option>
            <option value="0">Tidak</option>
        </select><br>

        <label>Level Estimasi:</label>
        <input type="text" name="level_estimasi" required><br>

        <label>Dapat Diakses Umum:</label>
        <select name="dapat_diakses_umum" required>
            <option value="1">Ya</option>
            <option value="0">Tidak</option>
        </select><br>

        <label>Indikator Pembangunan:</label>
        <select name="id_indikator_pembangunan" required>
            @foreach ($indikatorPembangunans as $indikator)
                <option value="{{ $indikator->id_indikator_pembangunan }}">{{ $indikator->nama }}</option>
            @endforeach
        </select><br>

        <label>Variabel Pembangunan:</label>
        <select name="id_variabel_pembangunan" required>
            @foreach ($variabelPembangunans as $variabel)
                <option value="{{ $variabel->id_variabel_pembangunan }}">{{ $variabel->nama }}</option>
            @endforeach
        </select><br>

        <button type="submit">Simpan</button>
    </form>
</body>
</html>
