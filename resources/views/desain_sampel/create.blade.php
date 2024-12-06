<!DOCTYPE html>
<html>
<head>
    <title>Tambah Desain Sampel</title>
</head>
<body>
    <h1>Tambah Desain Sampel</h1>
    <form action="{{ route('desain_sampel.store dd ($request->all());
') }}" method="POST">
        @csrf
        <label>Metode Pemilihan Sampel Akhir:</label>
        <input type="text" name="metode_pemilihan_sampel_akhir" required>
        <label>Metode yang Digunakan:</label>
        <input type="text" name="metode_yg_digunakan" required>
        <label>Jenis Rancangan Sampel:</label>
        <input type="text" name="jenis_rancangan_sampel" required>
        <label>Sarana Pengumpulan Data:</label>
        <input type="text" name="sarana_pengumpulan_data" required>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>