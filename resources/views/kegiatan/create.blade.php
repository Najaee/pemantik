<!DOCTYPE html>
<html>
<head>
    <title>Tambah Kegiatan</title>
</head>
<body>
    <h1>Tambah Kegiatan</h1>
    <form action="{{ route('kegiatan.store') }}" method="POST">
        @csrf
        <div>
            <label>Tahun:</label>
            <input type="number" name="tahun" required>
        </div>
        <div>
            <label>Judul Kegiatan:</label>
            <input type="text" name="judul_kegiatan" required>
        </div>
        <div>
            <label>Sektor Kegiatan:</label>
            <select name="sektor_kegiatan" required>
                <option value="" disabled selected>-- Pilih Sektor Kegiatan --</option>
                <option value="Pertanian dan Perikanan">Pertanian dan Perikanan</option>
                <option value="Demografi dan Kependudukan">Demografi dan Kependudukan</option>
                <option value="Pembangunan">Pembangunan</option>
                <option value="Proyeksi Ekonomi">Proyeksi Ekonomi</option>
                <option value="Pendidikan dan Pelatihan">Pendidikan dan Pelatihan</option>
                <option value="Lingkungan">Lingkungan</option>
                <option value="Keuangan">Keuangan</option>
                <option value="Globalisasi">Globalisasi</option>
                <option value="Kesehatan">Kesehatan</option>
                <option value="Industri dan Jasa">Industri dan Jasa</option>
                <option value="Teknologi Informasi dan Komunikasi">Teknologi Informasi dan Komunikasi</option>
                <option value="Perdagangan Internasional dan Neraca Perdagangan">Perdagangan Internasional dan Neraca Perdagangan</option>
                <option value="Ketenagakerjaan">Ketenagakerjaan</option>
                <option value="Neraca Nasional">Neraca Nasional</option>
                <option value="Indikator Ekonomi Bulanan">Indikator Ekonomi Bulanan</option>
                <option value="Produktivitas">Produktivitas</option>
                <option value="Harga dan Paritas Daya Beli">Harga dan Paritas Daya Beli</option>
                <option value="Sektor Publik, Perpajakan, dan Regulasi Pasar">Sektor Publik, Perpajakan, dan Regulasi Pasar</option>
                <option value="Perwilayahan dan Perkotaan">Perwilayahan dan Perkotaan</option>
                <option value="Ilmu Pengetahuan dan Hak Paten">Ilmu Pengetahuan dan Hak Paten</option>
                <option value="Perlindungan Sosial dan Kesejahteraan">Perlindungan Sosial dan Kesejahteraan</option>
                <option value="Transportasi">Transportasi</option>
            </select><br>
        </div>
        <div>
            <label>Telah Mendapat Rekomendasi:</label>
            <select name="telah_mendapat_rekomendasi" required>
                <option value="1">Ya</option>
                <option value="0">Tidak</option>
            </select>
        </div>
        <div>
            <label>Nomor Rekomendasi:</label>
            <input type="text" name="nomor_rekomendasi">
        </div>
        <div>
            <label>Latar Belakang:</label>
            <textarea name="latar_belakang_kegiatan" required></textarea>
        </div>
        <div>
            <label>Tujuan & Manfaat Kegiatan:</label>
            <textarea name="tujuan_manfaat" required></textarea>
        </div>
        <div>
            <button type="submit">Simpan</button>
        </div>
    </form>
</body>
</html>