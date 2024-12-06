<!DOCTYPE html>
<html>
<head>
    <title>Tambah Indikator Pembangunan</title>
</head>
<body>
    <h1>Tambah Indikator Pembangunan</h1>
    <form action="{{ route('indikator_pembangunan.store') }}" method="POST">
        @csrf
        <label>Publikasi Ketersediaan:</label>
        <input type="text" name="publikasi_ketersediaan" required>
        
        <label>Nama:</label>
        <input type="text" name="nama" required>
        
        <button type="submit">Simpan</button>
    </form>
</body>
</html>
