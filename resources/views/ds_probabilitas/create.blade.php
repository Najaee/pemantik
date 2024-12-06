<!DOCTYPE html>
<html>
<head>
    <title>Tambah DS Probabilitas</title>
</head>
<body>
    <h1>Tambah DS Probabilitas</h1>
    <form action="{{ route('ds_probabilitas.store') }}" method="POST">
        @csrf
        <label>Kerangka Sampel Tahap Akhir:</label>
        <input type="text" name="kerangka_sampel_tahap_akhir" required>
        <label>Fraksi Sampel Keseluruhan:</label>
        <input type="text" name="fraksi_sampel_keseluruhan" required>
        <label>Sampling Eror Variabel Utama:</label>
        <input type="text" name="sampling_eror_var_utama" required>
        <label>Unit Sampel:</label>
        <input type="text" name="unit_sampel" required>
        <label>Responden:</label>
        <input type="text" name="responden" required>
        <label>Unit Observasi:</label>
        <input type="text" name="unit_observasi" required>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>
