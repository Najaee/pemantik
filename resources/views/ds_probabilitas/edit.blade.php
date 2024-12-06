<!DOCTYPE html>
<html>
<head>
    <title>Edit DS Probabilitas</title>
</head>
<body>
    <h1>Edit DS Probabilitas</h1>
    <form action="{{ route('ds_probabilitas.update', $dsProbabilitas->id_ds_probabilitas) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Kerangka Sampel Tahap Akhir:</label>
        <input type="text" name="kerangka_sampel_tahap_akhir" value="{{ $dsProbabilitas->kerangka_sampel_tahap_akhir }}" required>
        <label>Fraksi Sampel Keseluruhan:</label>
        <input type="text" name="fraksi_sampel_keseluruhan" value="{{ $dsProbabilitas->fraksi_sampel_keseluruhan }}" required>
        <label>Sampling Eror Variabel Utama:</label>
        <input type="text" name="sampling_eror_var_utama" value="{{ $dsProbabilitas->sampling_eror_var_utama }}" required>
        <label>Unit Sampel:</label>
        <input type="text" name="unit_sampel" value="{{ $dsProbabilitas->unit_sampel }}" required>
        <label>Responden:</label>
        <input type="text" name="responden" value="{{ $dsProbabilitas->responden }}" required>
        <label>Unit Observasi:</label>
        <input type="text" name="unit_observasi" value="{{ $dsProbabilitas->unit_observasi }}" required>
        <button type="submit">Update</button>
    </form>
</body>
</html>
