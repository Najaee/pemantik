<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Petugas Pengumpulan Data</title>
</head>
<body>
    <h1>Edit Data Petugas Pengumpulan Data</h1>
    <form action="{{ route('petugas_pengumpulan_data.update', $petugas_pengumpulan_data->id_petugas_pengumpulan_data) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Cara Pengumpulan Data:</label>
        <input type="text" name="cara_pengumpulan_data" value="{{ $petugas_pengumpulan_data->cara_pengumpulan_data }}" required>
        <label>Kegiatan Ini Dilakukan:</label>
        <input type="text" name="kegiatan_ini_dilakukan" value="{{ $petugas_pengumpulan_data->kegiatan_ini_dilakukan }}" required>
        <label>Frekuensi Penyelenggara Kegiatan:</label>
        <input type="text" name="frekuensi_penyelenggara_kegiatan" value="{{ $petugas_pengumpulan_data->frekuensi_penyelenggara_kegiatan }}" required>
        <label>Tipe Pengumpulan Data:</label>
        <input type="text" name="tipe_pengumpulan_data" value="{{ $petugas_pengumpulan_data->tipe_pengumpulan_data }}" required>
        <label>Metode Pengumpulan Data:</label>
        <input type="text" name="metode_pengumpulan_data" value="{{ $petugas_pengumpulan_data->metode_pengumpulan_data }}" required>
        <label>Unit Pengumpulan Data:</label>
        <input type="text" name="unit_pengumpulan_data" value="{{ $petugas_pengumpulan_data->unit_pengumpulan_data }}" required>
        <label>Cakupan Wilayah Data:</label>
        <input type="text" name="cakupan_wilayah_data" value="{{ $petugas_pengumpulan_data->cakupan_wilayah_data }}" required>
        <label>Wilayah Data:</label>
        <input type="text" name="wilayah_data" value="{{ $petugas_pengumpulan_data->wilayah_data }}" required>
        <label>Pilot Survey:</label>
        <select name="pilot_survey" required>
            <option value="1" {{ $petugas_pengumpulan_data->pilot_survey ? 'selected' : '' }}>Ya</option>
            <option value="0" {{ !$petugas_pengumpulan_data->pilot_survey ? 'selected' : '' }}>Tidak</option>
        </select>
        <label>Metode Pemeriksaan Kualitas:</label>
        <input type="text" name="metode_pemeriksaan_kualitas_pengumpulan_data" value="{{ $petugas_pengumpulan_data->metode_pemeriksaan_kualitas_pengumpulan_data }}" required>
        <label>Penyesuaian Nonresponden:</label>
        <select name="penyesuaian_nonresponden" required>
            <option value="1" {{ $petugas_pengumpulan_data->penyesuaian_nonresponden ? 'selected' : '' }}>Ya</option>
            <option value="0" {{ !$petugas_pengumpulan_data->penyesuaian_nonresponden ? 'selected' : '' }}>Tidak</option>
        </select>
        <label>Petugas Pengumpulan Data:</label>
        <input type="text" name="petugas_pengumpulan_data" value="{{ $petugas_pengumpulan_data->petugas_pengumpulan_data }}" required>
        <label>Persyaratan Petugas Pengumpulan Data:</label>
        <input type="text" name="persyaratan_petugas_pengumpulan_data" value="{{ $petugas_pengumpulan_data->persyaratan_petugas_pengumpulan_data }}" required>
        <button type="submit">Update</button>
    </form>
</body>
</html>
