<!DOCTYPE html>
<html>
<head>
    <title>Edit Indikator Pembangunan</title>
</head>
<body>
    <h1>Edit Indikator Pembangunan</h1>
    <form action="{{ route('indikator_pembangunan.update', $data->id_indikator_pembangunan) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Publikasi Ketersediaan:</label>
        <input type="text" name="publikasi_ketersediaan" value="{{ $data->publikasi_ketersediaan }}" required>
        
        <label>Nama:</label>
        <input type="text" name="nama" value="{{ $data->nama }}" required>
        
        <button type="submit">Simpan</button>
    </form>
</body>
</html>
