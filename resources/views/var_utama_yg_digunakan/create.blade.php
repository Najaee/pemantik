<!DOCTYPE html>
<html>
<head>
    <title>Tambah Variabel Utama</title>
</head>
<body>
    <h1>Tambah Variabel Utama</h1>
    <form action="{{ route('var_utama_yg_digunakan.store') }}" method="POST">
        @csrf
        <label>Nama:</label>
        <input type="text" name="nama" required>
        <label>Konsep:</label>
        <textarea name="konsep" required></textarea>
        <label>Definisi:</label>
        <textarea name="definisi" required></textarea>
        <label>Referensi Waktu:</label>
        <input type="text" name="referensi_waktu" required>
        <label>Sumber:</label>
        <input type="text" name="sumber" required>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>
