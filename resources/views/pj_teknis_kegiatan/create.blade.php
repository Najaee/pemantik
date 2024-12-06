<!DOCTYPE html>
<html>
<head>
    <title>Tambah Penanggung Jawab Teknis Kegiatan</title>
</head>
<body>
    <h1>Tambah Penanggung Jawab Teknis Kegiatan</h1>
    <form action="{{ route('pj_teknis_kegiatan.store') }}" method="POST">
        @csrf
        <label>Nama:</label>
        <input type="text" name="nama" required>
        <label>Jabatan:</label>
        <input type="text" name="jabatan" required>
        <label>Alamat:</label>
        <textarea name="alamat" required></textarea>
        <label>Telepon:</label>
        <input type="text" name="telepon">
        <label>Email:</label>
        <input type="email" name="email" required>
        <label>Fax:</label>
        <input type="text" name="fax">
        <button type="submit">Simpan</button>
    </form>
</body>
</html>
