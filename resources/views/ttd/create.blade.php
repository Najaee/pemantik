<!DOCTYPE html>
<html>
<head>
    <title>Tambah TTD</title>
</head>
<body>
    <h1>Tambah TTD</h1>
    <form action="{{ route('ttd.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label>Waktu & Tempat:</label>
        <input type="text" name="waktu_tempat" required>
        
        <label>Kepala Dinas:</label>
        <input type="text" name="kep_dinas" required>
        
        <label>NIP:</label>
        <input type="text" name="nip" required>
        
        <label>TTD Image:</label>
        <input type="file" name="ttd_image" required>
        
        <button type="submit">Simpan</button>
    </form>
</body>
</html>
