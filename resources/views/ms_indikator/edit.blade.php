<!DOCTYPE html>
<html>
<head>
    <title>Edit MS Indikator</title>
</head>
<body>
    <h1>Edit MS Indikator</h1>
    <form action="{{ route('ms_indikator.update', $data->id_ms_indikator) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Nama:</label>
        <input type="text" name="nama" value="{{ $data->nama }}" required><br>

        <label>Konsep:</label>
        <input type="text" name="konsep" value="{{ $data->konsep }}" required><br>

        <label>Definisi:</label>
        <input type="text" name="definisi" value="{{ $data->definisi }}" required><br>

        <label>Interpretasi:</label>
        <input type="text" name="interpretasi" value="{{ $data->interpretasi }}" required><br>

        <label>Metode/Rumus Perhitungan:</label>
        <input type="text" name="metode_rumus_perhitungan" value="{{ $data->metode_rumus_perhitungan }}" required><br>

        <label>Ukuran:</label>
        <input type="text" name="ukuran" value="{{ $data->ukuran }}" required><br>

        <label>Satuan:</label>
        <input type="text" name="satuan" value="{{ $data->satuan }}" required><br>

        <label>Klasifikasi Penyajian:</label>
        <input type="text" name="klasifikasi_penyajian" value="{{ $data->klasifikasi_penyajian }}" required><br>

        <label>Indikator Composit:</label>
        <select name="indikator_composit" required>
            <option value="1" {{ $data->indikator_composit ? 'selected' : '' }}>Ya</option>
            <option value="0" {{ !$data->indikator_composit ? 'selected' : '' }}>Tidak</option>
        </select><br>

        <label>Level Estimasi:</label>
        <input type="text" name="level_estimasi" value="{{ $data->level_estimasi }}" required><br>

        <label>Dapat Diakses Umum:</label>
        <select name="dapat_diakses_umum" required>
            <option value="1" {{ $data->dapat_diakses_umum ? 'selected' : '' }}>Ya</option>
            <option value="0" {{ !$data->dapat_diakses_umum ? 'selected' : '' }}>Tidak</option>
        </select><br>

        <label>Indikator Pembangunan:</label>
        <select name="id_indikator_pembangunan" required>
            @foreach ($indikatorPembangunans as $indikator)
                <option value="{{ $indikator->id_indikator_pembangunan }}" {{ $data->id_indikator_pembangunan == $indikator->id_indikator_pembangunan ? 'selected' : '' }}>
                    {{ $indikator->nama }}
                </option>
            @endforeach
        </select><br>

        <label>Variabel Pembangunan:</label>
        <select name="id_variabel_pembangunan" required>
            @foreach ($variabelPembangunans as $variabel)
                <option value="{{ $variabel->id_variabel_pembangunan }}" {{ $data->id_variabel_pembangunan == $variabel->id_variabel_pembangunan ? 'selected' : '' }}>
                    {{ $variabel->nama }}
                </option>
            @endforeach
        </select><br>

        <button type="submit">Simpan</button>
    </form>
</body>
</html>
