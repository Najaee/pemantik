<!DOCTYPE html>
<html>
<head>
    <title>Edit Penanggung Jawab Teknis Kegiatan</title>
</head>
<body>
    <h1>Edit Penanggung Jawab Teknis Kegiatan</h1>
    <form action="{{ route('pj_teknis_kegiatan.update', $pjTeknisKegiatan->id_pj_teknis_kegiatan) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Nama:</label>
        <input type="text" name="nama" value="{{ $pjTeknisKegiatan->nama }}" required>
        <label>Jabatan:</label>
        <input type="text" name="jabatan" value="{{ $pjTeknisKegiatan->jabatan }}" required>
        <label>Alamat:</label>
        <textarea name="alamat" required>{{ $pjTeknisKegiatan->alamat }}</textarea>
        <label>Telepon:</label>
        <input type="text" name="telepon" value="{{ $pjTeknisKegiatan->telepon }}">
        <label>Email:</label>
        <input type="email" name="email" value="{{ $pjTeknisKegiatan->email }}" required>
        <label>Fax:</label>
        <input type="text" name="fax" value="{{ $pjTeknisKegiatan->fax }}">
        <button type="submit">Update</button>
    </form>
</body>
</html>
