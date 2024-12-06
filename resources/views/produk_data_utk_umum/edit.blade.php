<!DOCTYPE html>
<html>
<head>
    <title>Edit Produk Data untuk Umum</title>
</head>
<body>
    <h1>Edit Produk Data untuk Umum</h1>
    <form action="{{ route('produk_data_utk_umum.update', $data->id_produk_data_utk_umum) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Publikasi Tercetak:</label>
        <input type="text" name="spublikasi_tercetak" value="{{ $data->spublikasi_tercetak }}" required>
        
        <label>Publikasi Elektronik:</label>
        <input type="text" name="publikasi_elektronik" value="{{ $data->publikasi_elektronik }}" required>
        
        <label>Publikasi Data Mikro:</label>
        <input type="text" name="publikasi_data_mikro" value="{{ $data->publikasi_data_mikro }}" required>
        
        <button type="submit">Simpan</button>
    </form>
</body>
</html>
