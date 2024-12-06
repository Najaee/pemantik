<!DOCTYPE html>
<html>
<head>
    <title>Tambah Produk Data untuk Umum</title>
</head>
<body>
    <h1>Tambah Produk Data untuk Umum</h1>
    <form action="{{ route('produk_data_utk_umum.store') }}" method="POST">
        @csrf
        <label>Publikasi Tercetak:</label>
        <input type="text" name="spublikasi_tercetak" required>
        
        <label>Publikasi Elektronik:</label>
        <input type="text" name="publikasi_elektronik" required>
        
        <label>Publikasi Data Mikro:</label>
        <input type="text" name="publikasi_data_mikro" required>
        
        <button type="submit">Simpan</button>
    </form>
</body>
</html>
