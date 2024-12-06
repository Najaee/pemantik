<!DOCTYPE html>
<html>
<head>
    <title>Edit Jadwal Kegiatan</title>
</head>
<body>
    <h1>Edit Jadwal Kegiatan</h1>
    <form action="{{ route('pj_jadwal_kegiatan.update', $pjJadwalKegiatan->id_pj_jadwal_kegiatan) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Perencanaan/Persiapan:</label>
        <input type="text" name="perencanaan_persiapan" value="{{ $pjJadwalKegiatan->perencanaan_persiapan }}" required>
        <label>Desain:</label>
        <input type="text" name="desain" value="{{ $pjJadwalKegiatan->desain }}" required>
        <label>Pengumpulan Data:</label>
        <input type="text" name="pengumpulan_data" value="{{ $pjJadwalKegiatan->pengumpulan_data }}" required>
        <label>Pengolahan:</label>
        <input type="text" name="pengolahan" value="{{ $pjJadwalKegiatan->pengolahan }}" required>
        <label>Analisis:</label>
        <input type="text" name="analisis" value="{{ $pjJadwalKegiatan->analisis }}" required>
        <label>Diseminasi:</label>
        <input type="text" name="diseminasi" value="{{ $pjJadwalKegiatan->diseminasi }}" required>
        <label>Evaluasi:</label>
        <input type="text" name="evaluasi" value="{{ $pjJadwalKegiatan->evaluasi }}" required>
        <button type="submit">Update</button>
    </form>
</body>
</html>
