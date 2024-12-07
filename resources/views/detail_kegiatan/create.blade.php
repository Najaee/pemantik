<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Detail Kegiatan</title>
</head>
<body>

    <h1>Create Detail Kegiatan</h1>

    <form action="{{ route('detail_kegiatan.store') }}" method="POST">
        @csrf

        <label for="id_penyelenggara">Penyelenggara</label>
        <select name="id_penyelenggara" id="id_penyelenggara" required>
            <option value="">Select Penyelenggara</option>
            @foreach($penyelenggaras as $penyelenggara)
                <option value="{{ $penyelenggara->id }}">{{ $penyelenggara->name }}</option>
            @endforeach
        </select><br><br>

        <label for="id_pj_kegiatan">PJ Kegiatan</label>
        <select name="id_pj_kegiatan" id="id_pj_kegiatan" required>
            <option value="">Select PJ Kegiatan</option>
            @foreach($pjKegiatans as $pjKegiatan)
                <option value="{{ $pjKegiatan->id }}">{{ $pjKegiatan->name }}</option>
            @endforeach
        </select><br><br>

        <label for="id_pj_teknis_kegiatan">PJ Teknis Kegiatan</label>
        <select name="id_pj_teknis_kegiatan" id="id_pj_teknis_kegiatan" required>
            <option value="">Select PJ Teknis Kegiatan</option>
            @foreach($pjTeknisKegiatans as $pjTeknisKegiatan)
                <option value="{{ $pjTeknisKegiatan->id }}">{{ $pjTeknisKegiatan->name }}</option>
            @endforeach
        </select><br><br>

        <label for="id_walidata">Walidata</label>
        <select name="id_walidata" id="id_walidata" required>
            <option value="">Select Walidata</option>
            @foreach($walidatas as $walidata)
                <option value="{{ $walidata->id }}">{{ $walidata->name }}</option>
            @endforeach
        </select><br><br>

        <label for="id_pj_jadwal_kegiatan">PJ Jadwal Kegiatan</label>
        <select name="id_pj_jadwal_kegiatan" id="id_pj_jadwal_kegiatan" required>
            <option value="">Select PJ Jadwal Kegiatan</option>
            @foreach($pjJadwalKegiatans as $pjJadwalKegiatan)
                <option value="{{ $pjJadwalKegiatan->id }}">{{ $pjJadwalKegiatan->name }}</option>
            @endforeach
        </select><br><br>

        <label for="id_var_utama_yg_digunakan">Var Utama Yang Digunakan</label>
        <select name="id_var_utama_yg_digunakan" id="id_var_utama_yg_digunakan" required>
            <option value="">Select Var Utama</option>
            @foreach($varUtamaYgDigunakan as $var)
                <option value="{{ $var->id }}">{{ $var->name }}</option>
            @endforeach
        </select><br><br>

        <label for="id_jml_pengumpulan_data">Jumlah Pengumpulan Data</label>
        <select name="id_jml_pengumpulan_data" id="id_jml_pengumpulan_data" required>
            <option value="">Select Jumlah Pengumpulan Data</option>
            @foreach($jmlPengumpulanData as $jumlah)
                <option value="{{ $jumlah->id }}">{{ $jumlah->name }}</option>
            @endforeach
        </select><br><br>

        <label for="id_rancangan_lap_publikasi">Rancangan Lap. Publikasi</label>
        <select name="id_rancangan_lap_publikasi" id="id_rancangan_lap_publikasi" required>
            <option value="">Select Rancangan Lap. Publikasi</option>
            @foreach($rancanganLapPublikasi as $rancangan)
                <option value="{{ $rancangan->id }}">{{ $rancangan->name }}</option>
            @endforeach
        </select><br><br>

        <label for="id_metode_pengolahan">Metode Pengolahan</label>
        <select name="id_metode_pengolahan" id="id_metode_pengolahan" required>
            <option value="">Select Metode Pengolahan</option>
            @foreach($metodePengolahan as $metode)
                <option value="{{ $metode->id }}">{{ $metode->name }}</option>
            @endforeach
        </select><br><br>

        <label for="id_produk_data_utk_umum">Produk Data untuk Umum</label>
        <select name="id_produk_data_utk_umum" id="id_produk_data_utk_umum" required>
            <option value="">Select Produk Data untuk Umum</option>
            @foreach($produkDataUtkUmum as $produk)
                <option value="{{ $produk->id }}">{{ $produk->name }}</option>
            @endforeach
        </select><br><br>

        <label for="id_petugas_pengumpulan_data">Petugas Pengumpulan Data</label>
        <select name="id_petugas_pengumpulan_data" id="id_petugas_pengumpulan_data" required>
            <option value="">Select Petugas Pengumpulan Data</option>
            @foreach($petugasPengumpulanData as $petugas)
                <option value="{{ $petugas->id }}">{{ $petugas->name }}</option>
            @endforeach
        </select><br><br>

        <label for="id_ds">Desain Sampel</label>
        <select name="id_ds" id="id_ds" required>
            <option value="">Select Desain Sampel</option>
            @foreach($desainSampels as $desain)
                <option value="{{ $desain->id }}">{{ $desain->name }}</option>
            @endforeach
        </select><br><br>

        <label for="id_ds_nonprobabilitas">Desain Sampel Nonprobabilitas</label>
        <select name="id_ds_nonprobabilitas" id="id_ds_nonprobabilitas" required>
            <option value="">Select Desain Sampel Nonprobabilitas</option>
            @foreach($dsNonprobabilitases as $dsNonprobabilitas)
                <option value="{{ $dsNonprobabilitas->id }}">{{ $dsNonprobabilitas->name }}</option>
            @endforeach
        </select><br><br>

        <label for="id_ds_probabilitas">Desain Sampel Probabilitas</label>
        <select name="id_ds_probabilitas" id="id_ds_probabilitas" required>
            <option value="">Select Desain Sampel Probabilitas</option>
            @foreach($dsProbabilitases as $dsProbabilitas)
                <option value="{{ $dsProbabilitas->id }}">{{ $dsProbabilitas->name }}</option>
            @endforeach
        </select><br><br>

        <label for="id_indikator_pembangunan">Indikator Pembangunan</label>
        <select name="id_indikator_pembangunan" id="id_indikator_pembangunan" required>
            <option value="">Select Indikator Pembangunan</option>
            @foreach($indikatorPembangunans as $indikator)
                <option value="{{ $indikator->id }}">{{ $indikator->name }}</option>
            @endforeach
        </select><br><br>

        <label for="id_variabel_pembangunan">Variabel Pembangunan</label>
        <select name="id_variabel_pembangunan" id="id_variabel_pembangunan" required>
            <option value="">Select Variabel Pembangunan</option>
            @foreach($variabelPembangunans as $variabel)
                <option value="{{ $variabel->id }}">{{ $variabel->name }}</option>
            @endforeach
        </select><br><br>

        <label for="id_ms_indikator">MS Indikator</label>
        <select name="id_ms_indikator" id="id_ms_indikator" required>
            <option value="">Select MS Indikator</option>
            @foreach($msIndikators as $msIndikator)
                <option value="{{ $msIndikator->id }}">{{ $msIndikator->name }}</option>
            @endforeach
        </select><br><br>

        <button type="submit">Submit</button>
    </form>

</body>
</html>
