<!DOCTYPE html>
<html>
<head>
    <title>Edit TTD</title>
</head>
<body>
    <h1>Edit TTD</h1>
    <form action="{{ route('ttd.update', $data->id_ttd) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <label>Waktu & Tempat:</label>
        <input type="text" name="waktu_tempat" value="{{ $data->waktu_tempat }}" required>
        
        <label>Kepala Dinas:</label>
        <input type="text" name="kep_dinas" value="{{ $data->kep_dinas }}" required>
        
        <label>NIP:</label>
        <input type="text" name="nip" value="{{ $data->nip }}" required>
        
        <label>TTD Image:</label>
        <input type="file" name="ttd_image">
        <img src="{{ asset('storage/' . $data->ttd_image) }}" alt="TTD Image" width="100">
        
        <button type="submit">Simpan</button>
    </form>
</body>
</html>
