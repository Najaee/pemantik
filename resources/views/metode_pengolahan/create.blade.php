<!DOCTYPE html>
<html>
<head>
    <title>Tambah Metode Pengolahan</title>
</head>
<body>
    <h1>Tambah Metode Pengolahan</h1>
    <form action="{{ route('metode_pengolahan.store') }}" method="POST">
        @csrf

        <label>Editing:</label>
        <input type="text" name="editing" required>

        <label>Coding:</label>
        <input type="text" name="coding" required>

        <label>Input Data:</label>
        <input type="text" name="input_data" required>

        <label>Penyahihan:</label>
        <input type="text" name="penyahihan" required>

        <label>Microdata/Rawdata:</label>
        <input type="text" name="microdata_rawdata" required>

        <label>Metode Lain (Opsional):</label>
        <input type="text" name="metode_lain">

        <label>Metode Analisis:</label>
        <input type="text" name="metode_analisis" required>

        <label>Unit Analisis:</label>
        <input type="text" name="unit_analisis" required>

        <label>Tingkat Penyajian Data:</label>
        <input type="text" name="tingkat_penyajian_data" required>

        <button type="submit">Simpan</button>
    </form>
</body>
</html>
