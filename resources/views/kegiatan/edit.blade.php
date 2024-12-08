<!DOCTYPE html>
<html>
<head>
    <title>Edit Kegiatan</title>
</head>
<body>
    <h1>Edit Kegiatan</h1>

    <form action="{{ route('kegiatan.update', $kegiatan->id_kegiatan) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label for="tahun">Tahun:</label>
            <select name="tahun" id="tahun" required>
                @for ($year = 2020; $year <= 2030; $year++)
                    <option value="{{ $year }}" {{ old('tahun', $kegiatan->tahun) == $year ? 'selected' : '' }}>{{ $year }}</option>
                @endfor
            </select>
        </div>        

        <div>
            <label for="judul_kegiatan">Judul Kegiatan:</label>
            <input type="text" name="judul_kegiatan" id="judul_kegiatan" value="{{ old('judul_kegiatan', $kegiatan->judul_kegiatan) }}" required>
        </div>

        <div>
            <label for="sektor_kegiatan">Sektor Kegiatan:</label>
            <select name="sektor_kegiatan" id="sektor_kegiatan" required>
                <option value="" disabled>-- Pilih Sektor Kegiatan --</option>
                <option value="Pertanian dan Perikanan" {{ $kegiatan->sektor_kegiatan == 'Pertanian dan Perikanan' ? 'selected' : '' }}>Pertanian dan Perikanan</option>
                <option value="Demografi dan Kependudukan" {{ $kegiatan->sektor_kegiatan == 'Demografi dan Kependudukan' ? 'selected' : '' }}>Demografi dan Kependudukan</option>
                <option value="Pembangunan" {{ $kegiatan->sektor_kegiatan == 'Pembangunan' ? 'selected' : '' }}>Pembangunan</option>
                <option value="Proyeksi Ekonomi" {{ $kegiatan->sektor_kegiatan == 'Proyeksi Ekonomi' ? 'selected' : '' }}>Proyeksi Ekonomi</option>
                <option value="Pendidikan dan Pelatihan" {{ $kegiatan->sektor_kegiatan == 'Pendidikan dan Pelatihan' ? 'selected' : '' }}>Pendidikan dan Pelatihan</option>
                <option value="Lingkungan" {{ $kegiatan->sektor_kegiatan == 'Lingkungan' ? 'selected' : '' }}>Lingkungan</option>
                <option value="Keuangan" {{ $kegiatan->sektor_kegiatan == 'Keuangan' ? 'selected' : '' }}>Keuangan</option>
                <option value="Globalisasi" {{ $kegiatan->sektor_kegiatan == 'Globalisasi' ? 'selected' : '' }}>Globalisasi</option>
                <option value="Kesehatan" {{ $kegiatan->sektor_kegiatan == 'Kesehatan' ? 'selected' : '' }}>Kesehatan</option>
                <option value="Industri dan Jasa" {{ $kegiatan->sektor_kegiatan == 'Industri dan Jasa' ? 'selected' : '' }}>Industri dan Jasa</option>
                <option value="Teknologi Informasi dan Komunikasi" {{ $kegiatan->sektor_kegiatan == 'Teknologi Informasi dan Komunikasi' ? 'selected' : '' }}>Teknologi Informasi dan Komunikasi</option>
                <option value="Perdagangan Internasional dan Neraca Perdagangan" {{ $kegiatan->sektor_kegiatan == 'Perdagangan Internasional dan Neraca Perdagangan' ? 'selected' : '' }}>Perdagangan Internasional dan Neraca Perdagangan</option>
                <option value="Ketenagakerjaan" {{ $kegiatan->sektor_kegiatan == 'Ketenagakerjaan' ? 'selected' : '' }}>Ketenagakerjaan</option>
                <option value="Neraca Nasional" {{ $kegiatan->sektor_kegiatan == 'Neraca Nasional' ? 'selected' : '' }}>Neraca Nasional</option>
                <option value="Indikator Ekonomi Bulanan" {{ $kegiatan->sektor_kegiatan == 'Indikator Ekonomi Bulanan' ? 'selected' : '' }}>Indikator Ekonomi Bulanan</option>
                <option value="Produktivitas" {{ $kegiatan->sektor_kegiatan == 'Produktivitas' ? 'selected' : '' }}>Produktivitas</option>
                <option value="Harga dan Paritas Daya Beli" {{ $kegiatan->sektor_kegiatan == 'Harga dan Paritas Daya Beli' ? 'selected' : '' }}>Harga dan Paritas Daya Beli</option>
                <option value="Sektor Publik, Perpajakan, dan Regulasi Pasar" {{ $kegiatan->sektor_kegiatan == 'Sektor Publik, Perpajakan, dan Regulasi Pasar' ? 'selected' : '' }}>Sektor Publik, Perpajakan, dan Regulasi Pasar</option>
                <option value="Perwilayahan dan Perkotaan" {{ $kegiatan->sektor_kegiatan == 'Perwilayahan dan Perkotaan' ? 'selected' : '' }}>Perwilayahan dan Perkotaan</option>
                <option value="Ilmu Pengetahuan dan Hak Paten" {{ $kegiatan->sektor_kegiatan == 'Ilmu Pengetahuan dan Hak Paten' ? 'selected' : '' }}>Ilmu Pengetahuan dan Hak Paten</option>
                <option value="Perlindungan Sosial dan Kesejahteraan" {{ $kegiatan->sektor_kegiatan == 'Perlindungan Sosial dan Kesejahteraan' ? 'selected' : '' }}>Perlindungan Sosial dan Kesejahteraan</option>
                <option value="Transportasi" {{ $kegiatan->sektor_kegiatan == 'Transportasi' ? 'selected' : '' }}>Transportasi</option>
            </select>
        </div>
        <div>
            <label for="rekomendasi_bps">Telah Mendapat Rekomendasi:</label>
            <select name="rekomendasi_bps" id="rekomendasi_bps" required>
                <option value="1" {{ $kegiatan->rekomendasi_bps == 1 ? 'selected' : '' }}>Ya</option>
                <option value="0" {{ $kegiatan->rekomendasi_bps == 0 ? 'selected' : '' }}>Tidak</option>
            </select>
        </div>        

        <div>
            <label for="nomor_rekomendasi">Nomor Rekomendasi:</label>
            <input type="text" name="nomor_rekomendasi" id="nomor_rekomendasi" value="{{ old('nomor_rekomendasi', $kegiatan->nomor_rekomendasi) }}">
        </div>

        <div>
            <label for="latar_belakang">Latar Belakang:</label>
            <textarea name="latar_belakang" id="latar_belakang" required>{{ old('latar_belakang', $kegiatan->latar_belakang) }}</textarea>
        </div>

        <div>
            <label for="kegiatan">Kegiatan:</label>
            <textarea name="kegiatan" id="kegiatan" required>{{ old('kegiatan', $kegiatan->kegiatan) }}</textarea>
        </div>

        <div>
            <label for="tujuan_manfaat">Tujuan & Manfaat Kegiatan:</label>
            <textarea name="tujuan_manfaat" id="tujuan_manfaat" required>{{ old('tujuan_manfaat', $kegiatan->tujuan_manfaat) }}</textarea>
        </div>

        <div>
            <button type="submit">Update</button>
        </div>
    </form>
</body>
</html>
