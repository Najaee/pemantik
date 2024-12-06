<!DOCTYPE html>
<html>
<head>
    <title>Edit Variabel Utama</title>
</head>
<body>
    <h1>Edit Variabel Utama</h1>
    <form action="{{ route('var_utama_yg_digunakan.update', $varUtamaYgDigunakan->id_var_utama_yg_digunakan) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Nama:</label>
        <input type="text" name="nama" value="{{ $varUtamaYgDigunakan->nama }}" required>
        <label>Konsep:</label>
        <textarea name="konsep" required>{{ $varUtamaYgDigunakan->konsep }}</textarea>
        <label>Definisi:</label>
        <textarea name="definisi" required>{{ $varUtamaYgDigunakan->definisi }}</textarea>
        <label>Referensi Waktu:</label>
        <input type="text" name="referensi_waktu" value="{{ $varUtamaYgDigunakan->referensi_waktu }}" required>
        <label>Sumber:</label>
        <input type="text" name="sumber" value="{{ $varUtamaYgDigunakan->sumber }}" required>
        <button type="submit">Update</button>
    </form>
</body>
</html>
