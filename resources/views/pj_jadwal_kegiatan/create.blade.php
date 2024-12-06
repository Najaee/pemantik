<!DOCTYPE html>
<html>
<head>
    <title>Tambah Jadwal Kegiatan</title>
</head>
<body>
    <h1>Tambah Jadwal Kegiatan</h1>
    <form action="{{ route('pj_jadwal_kegiatan.store') }}" method="POST">
        @csrf
        <label>Perencanaan/Persiapan:</label>
        <input type="text" name="perencanaan_persiapan" required>
        <label>Desain:</label>
        <input type="text" name="desain" required>
        <label>Pengumpulan Data:</label>
        <input type="text" name="pengumpulan_data" required>
        <label>Pengolahan:</label>
        <input type="text" name="pengolahan" required>
        <label>Analisis:</label>
        <input type="text" name="analisis" required>
        <label>Diseminasi:</label>
        <input type="text" name="diseminasi" required>
        <label>Evaluasi:</label>
        <input type="text" name="evaluasi" required>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>
