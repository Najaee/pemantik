<!DOCTYPE html>
<html>
<head>
    <title>Edit Desain Sampel</title>
</head>
<body>
    <h1>Edit Desain Sampel</h1>
    <form action="{{ route('desain_sampel.update', $desainSampel->id_ds) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Metode Pemilihan Sampel Akhir:</label>
        <input type="text" name="metode_pemilihan_sampel_akhir" value="{{ $desainSampel->metode_pemilihan_sampel_akhir }}" required>
        <label>Metode yang Digunakan:</label>
        <input type="text" name="metode_yg_digunakan" value="{{ $desainSampel->metode_yg_digunakan }}" required>
        <label>Jenis Rancangan Sampel:</label>
        <input type="text" name="jenis_rancangan_sampel" value="{{ $desainSampel->jenis_rancangan_sampel }}" required>
        <label>Sarana Pengumpulan Data:</label>
        <input type="text" name="sarana_pengumpulan_data" value="{{ $desainSampel->sarana_pengumpulan_data }}" required>
        <button type="submit">Update</button>
    </form>
</body>
</html>
