<!DOCTYPE html>
<html>
<head>
    <title>Edit Penanggung Jawab Kegiatan</title>
</head>
<body>
    <h1>Edit Penanggung Jawab Kegiatan</h1>
    <form action="{{ route('pj_kegiatan.update', $pjKegiatan->id_pj_kegiatan) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Nama:</label>
        <input type="text" name="nama" value="{{ $pjKegiatan->nama }}" required>
        <label>Unit Kerja:</label>
        <input type="text" name="unit_kerja" value="{{ $pjKegiatan->unit_kerja }}" required>
        <label>Jabatan:</label>
        <input type="text" name="jabatan" value="{{ $pjKegiatan->jabatan }}" required>
        <label>Alamat:</label>
        <textarea name="alamat" required>{{ $pjKegiatan->alamat }}</textarea>
        <label>Telepon:</label>
        <input type="text" name="telepon" value="{{ $pjKegiatan->telepon }}">
        <label>Email:</label>
        <input type="email" name="email" value="{{ $pjKegiatan->email }}" required>
        <label>Fax:</label>
        <input type="text" name="fax" value="{{ $pjKegiatan->fax }}">
        <button type="submit">Update</button>
    </form>
</body>
</html>
