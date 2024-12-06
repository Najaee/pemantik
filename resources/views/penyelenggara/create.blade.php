<!DOCTYPE html>
<html>
<head>
    <title>Tambah Penyelenggara</title>
</head>
<body>
    <h1>Tambah Penyelenggara</h1>
    <form action="{{ route('penyelenggara.store') }}" method="POST">
        @csrf
        <label>Penanggungjawab:</label>
        <input type="text" name="penanggungjawab" required>
        <label>Perangkat Daerah:</label>
        <input type="text" name="perangkat_daerah_penyelenggara" required>
        <label>Provinsi:</label>
        <input type="text" name="provinsi" required>
        <label>Kabupaten/Kota:</label>
        <input type="text" name="kabupaten_kota" required>
        <label>Alamat Lengkap:</label>
        <textarea name="alamat_lengkap_penyelenggara" required></textarea>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>
