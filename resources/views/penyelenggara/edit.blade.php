<!DOCTYPE html>
<html>
<head>
    <title>Edit Penyelenggara</title>
</head>
<body>
    <h1>Edit Penyelenggara</h1>
    <form action="{{ route('penyelenggara.update', $penyelenggara->id_penyelenggara) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Penanggungjawab:</label>
        <input type="text" name="penanggungjawab" value="{{ $penyelenggara->penanggungjawab }}" required>
        <label>Perangkat Daerah:</label>
        <input type="text" name="perangkat_daerah_penyelenggara" value="{{ $penyelenggara->perangkat_daerah_penyelenggara }}" required>
        <label>Provinsi:</label>
        <input type="text" name="provinsi" value="{{ $penyelenggara->provinsi }}" required>
        <label>Kabupaten/Kota:</label>
        <input type="text" name="kabupaten_kota" value="{{ $penyelenggara->kabupaten_kota }}" required>
        <label>Alamat Lengkap:</label>
        <textarea name="alamat_lengkap_penyelenggara" required>{{ $penyelenggara->alamat_lengkap_penyelenggara }}</textarea>
        <button type="submit">Update</button>
    </form>
</body>
</html>
