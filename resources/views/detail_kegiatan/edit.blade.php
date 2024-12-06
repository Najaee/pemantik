<!DOCTYPE html>
<html>
<head>
    <title>Edit Detail Kegiatan</title>
</head>
<body>
    <h1>Edit Detail Kegiatan</h1>
    <form action="{{ route('detail_kegiatan.update', $detailKegiatan->id_detail_kegiatan) }}" method="POST">
        @csrf
        @method('PUT')
        <label>ID Kegiatan:</label>
        <input type="text" name="id_kegiatan" value="{{ $detailKegiatan->id_kegiatan }}" required><br>

        <label>ID Penyelenggara:</label>
        <input type="text" name="id_penyelenggara" value="{{ $detailKegiatan->id_penyelenggara }}" required><br>

        <label>ID PJ Kegiatan:</label>
        <input type="text" name="id_pj_kegiatan" value="{{ $detailKegiatan->id_pj_kegiatan }}" required><br>

        <label>ID PJ Teknis Kegiatan:</label>
        <input type="text" name="id_pj_teknis_kegiatan" value="{{ $detailKegiatan->id_pj_teknis_kegiatan }}" required><br>

        <label>ID Walidata:</label>
        <input type="text" name="id_walidata" value="{{ $detailKegiatan->id_walidata }}" required><br>

        <label>ID PJ Jadwal Kegiatan:</label>
        <input type="text" name="id_pj_jadwal_kegiatan" value="{{ $detailKegiatan->id_pj_jadwal_kegiatan }}" required><br>

        <label>ID Var Utama yang Digunakan:</label>
        <input type="text" name="id_var_utama_yg_digunakan" value="{{ $detailKegiatan->id_var_utama_yg_digunakan }}" required><br>

        <label>ID Jumlah Pengumpulan Data:</label>
        <input type="text" name="id_jml_pengumpulan_data" value="{{ $detailKegiatan->id_jml_pengumpulan_data }}" required><br>

        <label>ID Rancangan Laporan Publikasi:</label>
        <input type="text" name="id_rancangan_lap_publikasi" value="{{ $detailKegiatan->id_rancangan_lap_publikasi }}" required><br>

        <label>ID Metode Pengolahan:</label>
        <input type="text" name="id_metode_pengolahan" value="{{ $detailKegiatan->id_metode_pengolahan }}" required><br>

        <label>ID Produk Data untuk Umum:</label>
        <input type="text" name="id_produk_data_utk_umum" value="{{ $detailKegiatan->id_produk_data_utk_umum }}" required><br>

        <label>ID Petugas Pengumpulan Data:</label>
        <input type="text" name="id_petugas_pengumpulan_data" value="{{ $detailKegiatan->id_petugas_pengumpulan_data }}" required><br>

        <label>ID Desain Sampel:</label>
        <input type="text" name="id_ds" value="{{ $detailKegiatan->id_ds }}" required><br>

        <label>ID DS Nonprobabilitas:</label>
        <input type="text" name="id_ds_nonprobabilitas" value="{{ $detailKegiatan->id_ds_nonprobabilitas }}" required><br>

        <label>ID DS Probabilitas:</label>
        <input type="text" name="id_ds_probabilitas" value="{{ $detailKegiatan->id_ds_probabilitas }}" required><br>

        <label>ID Indikator Pembangunan:</label>
        <input type="text" name="id_indikator_pembangunan" value="{{ $detailKegiatan->id_indikator_pembangunan }}" required><br>

        <label>ID Variabel Pembangunan:</label>
        <input type="text" name="id_variabel_pembangunan" value="{{ $detailKegiatan->id_variabel_pembangunan }}" required><br>

        <label>ID MS Indikator:</label>
        <input type="text" name="id_ms_indikator" value="{{ $detailKegiatan->id_ms_indikator }}" required><br>

        <button type="submit">Update</button>
    </form>
</body>
</html>