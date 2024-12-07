<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Detail Kegiatan</title>
</head>

<body>

    <h1>Edit Detail Kegiatan</h1>

    <form action="{{ route('detail_kegiatan.update', $detailKegiatan->id_detail_kegiatan) }}" method="POST">
        @csrf
        @method('PUT') <!-- Menandakan bahwa ini adalah permintaan update -->

        <!-- Dropdown Kegiatan -->
        <label for="id_kegiatan">Kegiatan</label>
        <select name="id_kegiatan" id="id_kegiatan" required>
            <option value="">Select Kegiatan</option>
            @foreach ($kegiatans as $kegiatan)
                <option value="{{ $kegiatan->id_kegiatan }}" 
                    @if($kegiatan->id_kegiatan == $detailKegiatan->id_kegiatan) selected @endif>
                    {{ $kegiatan->judul_kegiatan }}
                </option>
            @endforeach
        </select><br><br>

        <!-- Dropdown Penyelenggara -->
        <label for="id_penyelenggara">Penyelenggara</label>
        <select name="id_penyelenggara" id="id_penyelenggara" required>
            <option value="">Select Penyelenggara</option>
            @foreach ($penyelenggaras as $penyelenggara)
                <option value="{{ $penyelenggara->id_penyelenggara }}"
                    @if($penyelenggara->id_penyelenggara == $detailKegiatan->id_penyelenggara) selected @endif>
                    {{ $penyelenggara->penanggungjawab }}
                </option>
            @endforeach
        </select><br><br>

        <!-- Dropdown PJ Kegiatan -->
        <label for="id_pj_kegiatan">PJ Kegiatan</label>
        <select name="id_pj_kegiatan" id="id_pj_kegiatan" required>
            <option value="">Select PJ Kegiatan</option>
            @foreach ($pjKegiatans as $pjKegiatan)
                <option value="{{ $pjKegiatan->id_pj_kegiatan }}"
                    @if($pjKegiatan->id_pj_kegiatan == $detailKegiatan->id_pj_kegiatan) selected @endif>
                    {{ $pjKegiatan->nama }} - {{ $pjKegiatan->jabatan }}
                </option>
            @endforeach
        </select><br><br>

        <!-- Dropdown PJ Teknis Kegiatan -->
        <label for="id_pj_teknis_kegiatan">PJ Teknis Kegiatan</label>
        <select name="id_pj_teknis_kegiatan" id="id_pj_teknis_kegiatan" required>
            <option value="">Select PJ Teknis Kegiatan</option>
            @foreach ($pjTeknisKegiatans as $pjTeknisKegiatan)
                <option value="{{ $pjTeknisKegiatan->id_pj_teknis_kegiatan }}"
                    @if($pjTeknisKegiatan->id_pj_teknis_kegiatan == $detailKegiatan->id_pj_teknis_kegiatan) selected @endif>
                    {{ $pjTeknisKegiatan->nama }} - {{ $pjTeknisKegiatan->jabatan }}
                </option>
            @endforeach
        </select><br><br>

        <!-- Dropdown Walidata -->
        <label for="id_walidata">Walidata</label>
        <select name="id_walidata" id="id_walidata" required>
            <option value="">Select Walidata</option>
            @foreach ($walidatas as $walidata)
                <option value="{{ $walidata->id_walidata }}"
                    @if($walidata->id_walidata == $detailKegiatan->id_walidata) selected @endif>
                    {{ $walidata->unit_kerja_walidata }}
                </option>
            @endforeach
        </select><br><br>

        <!-- Dropdown PJ Jadwal Kegiatan -->
        <label for="id_pj_jadwal_kegiatan">PJ Jadwal Kegiatan</label>
        <select name="id_pj_jadwal_kegiatan" id="id_pj_jadwal_kegiatan" required>
            <option value="">Select PJ Jadwal Kegiatan</option>
            @foreach ($pjJadwalKegiatans as $pjJadwalKegiatan)
                <option value="{{ $pjJadwalKegiatan->id_pj_jadwal_kegiatan }}"
                    @if($pjJadwalKegiatan->id_pj_jadwal_kegiatan == $detailKegiatan->id_pj_jadwal_kegiatan) selected @endif>
                    {{ $pjJadwalKegiatan->perencanaan_persiapan }} - {{ $pjJadwalKegiatan->evaluasi }}
                </option>
            @endforeach
        </select><br><br>

        <!-- Dropdown Var Utama Yang Digunakan -->
        <label for="id_var_utama_yg_digunakan">Var Utama Yang Digunakan</label>
        <select name="id_var_utama_yg_digunakan" id="id_var_utama_yg_digunakan" required>
            <option value="">Select Var Utama</option>
            @foreach ($varUtamaYgDigunakan as $var)
                <option value="{{ $var->id_var_utama_yg_digunakan }}"
                    @if($var->id_var_utama_yg_digunakan == $detailKegiatan->id_var_utama_yg_digunakan) selected @endif>
                    {{ $var->nama }} - {{ $var->konsep }}
                </option>
            @endforeach
        </select><br><br>

        <!-- Dropdown Jumlah Pengumpulan Data -->
        <label for="id_jml_pengumpulan_data">Jumlah Pengumpulan Data</label>
        <select name="id_jml_pengumpulan_data" id="id_jml_pengumpulan_data" required>
            <option value="">Select Jumlah Pengumpulan Data</option>
            @foreach ($jmlPengumpulanData as $jumlah)
                <option value="{{ $jumlah->id_jml_pengumpulan_data }}"
                    @if($jumlah->id_jml_pengumpulan_data == $detailKegiatan->id_jml_pengumpulan_data) selected @endif>
                    Supervisor: {{ $jumlah->supervisor }} - Enum: {{ $jumlah->enum }}
                </option>
            @endforeach
        </select><br><br>

        <!-- Dropdown Rancangan Lap. Publikasi -->
        <label for="id_rancangan_lap_publikasi">Rancangan Lap. Publikasi</label>
        <select name="id_rancangan_lap_publikasi" id="id_rancangan_lap_publikasi" required>
            <option value="">Select Rancangan Lap. Publikasi</option>
            @foreach ($rancanganLapPublikasi as $rancangan)
                <option value="{{ $rancangan->id_rancangan_lap_publikasi }}"
                    @if($rancangan->id_rancangan_lap_publikasi == $detailKegiatan->id_rancangan_lap_publikasi) selected @endif>
                    {{ $rancangan->rancangan_output }} - {{ $rancangan->rancangan_deskripsi_var }}
                </option>
            @endforeach
        </select><br><br>

        <!-- Dropdown Metode Pengolahan -->
        <label for="id_metode_pengolahan">Metode Pengolahan</label>
        <select name="id_metode_pengolahan" id="id_metode_pengolahan" required>
            <option value="">Select Metode Pengolahan</option>
            @foreach ($metodePengolahan as $metode)
                <option value="{{ $metode->id_metode_pengolahan }}"
                    @if($metode->id_metode_pengolahan == $detailKegiatan->id_metode_pengolahan) selected @endif>
                    {{ $metode->editing }} - {{ $metode->metode_analisis }}
                </option>
            @endforeach
        </select><br><br>

        <!-- Dropdown Produk Data untuk Umum -->
        <label for="id_produk_data_utk_umum">Produk Data untuk Umum</label>
        <select name="id_produk_data_utk_umum" id="id_produk_data_utk_umum" required>
            <option value="">Select Produk Data untuk Umum</option>
            @foreach ($produkDataUtkUmum as $produk)
                <option value="{{ $produk->id_produk_data_utk_umum }}"
                    @if($produk->id_produk_data_utk_umum == $detailKegiatan->id_produk_data_utk_umum) selected @endif>
                    {{ $produk->spublikasi_tercetak }} - {{ $produk->publikasi_elektronik }}
                </option>
            @endforeach
        </select><br><br>

        <!-- Dropdown Petugas Pengumpulan Data -->
        <label for="id_petugas_pengumpulan_data">Petugas Pengumpulan Data</label>
        <select name="id_petugas_pengumpulan_data" id="id_petugas_pengumpulan_data" required>
            <option value="">Select Petugas Pengumpulan Data</option>
            @foreach ($petugasPengumpulanData as $petugas)
                <option value="{{ $petugas->id_petugas_pengumpulan_data }}"
                    @if($petugas->id_petugas_pengumpulan_data == $detailKegiatan->id_petugas_pengumpulan_data) selected @endif>
                    {{ $petugas->cara_pengumpulan_data }} - {{ $petugas->cakupan_wilayah_data }}
                </option>
            @endforeach
        </select><br><br>

        <!-- Dropdown Desain Sampel -->
        <label for="id_ds">Desain Sampel</label>
        <select name="id_ds" id="id_ds" required>
            <option value="">Select Desain Sampel</option>
            @foreach ($desainSampels as $desain)
                <option value="{{ $desain->id_ds }}"
                    @if($desain->id_ds == $detailKegiatan->id_ds) selected @endif>
                    {{ $desain->metode_pemilihan_sampel_akhir }} - {{ $desain->jenis_rancangan_sampel }}
                </option>
            @endforeach
        </select><br><br>

        <!-- Dropdown Desain Sampel Nonprobabilitas -->
        <label for="id_ds_nonprobabilitas">Desain Sampel Nonprobabilitas</label>
        <select name="id_ds_nonprobabilitas" id="id_ds_nonprobabilitas" required>
            <option value="">Select Desain Sampel Nonprobabilitas</option>
            @foreach ($dsNonprobabilitases as $dsNonprobabilitas)
                <option value="{{ $dsNonprobabilitas->id_ds_nonprobabilitas }}"
                    @if($dsNonprobabilitas->id_ds_nonprobabilitas == $detailKegiatan->id_ds_nonprobabilitas) selected @endif>
                    {{ $dsNonprobabilitas->unit_sampel }} - {{ $dsNonprobabilitas->unit_observasi }}
                </option>
            @endforeach
        </select><br><br>

        <!-- Dropdown Desain Sampel Probabilitas -->
        <label for="id_ds_probabilitas">Desain Sampel Probabilitas</label>
        <select name="id_ds_probabilitas" id="id_ds_probabilitas" required>
            <option value="">Select Desain Sampel Probabilitas</option>
            @foreach ($dsProbabilitases as $dsProbabilitas)
                <option value="{{ $dsProbabilitas->id_ds_probabilitas }}"
                    @if($dsProbabilitas->id_ds_probabilitas == $detailKegiatan->id_ds_probabilitas) selected @endif>
                    {{ $dsProbabilitas->unit_sampel }} - {{ $dsProbabilitas->responden }}
                </option>
            @endforeach
        </select><br><br>

        <!-- Dropdown Indikator Pembangunan -->
        <label for="id_indikator_pembangunan">Indikator Pembangunan</label>
        <select name="id_indikator_pembangunan" id="id_indikator_pembangunan" required>
            <option value="">Select Indikator Pembangunan</option>
            @foreach ($indikatorPembangunans as $indikator)
                <option value="{{ $indikator->id_indikator_pembangunan }}"
                    @if($indikator->id_indikator_pembangunan == $detailKegiatan->id_indikator_pembangunan) selected @endif>
                    {{ $indikator->nama }}
                </option>
            @endforeach
        </select><br><br>

        <!-- Dropdown Variabel Pembangunan -->
        <label for="id_variabel_pembangunan">Variabel Pembangunan</label>
        <select name="id_variabel_pembangunan" id="id_variabel_pembangunan" required>
            <option value="">Select Variabel Pembangunan</option>
            @foreach ($variabelPembangunans as $variabel)
                <option value="{{ $variabel->id_variabel_pembangunan }}"
                    @if($variabel->id_variabel_pembangunan == $detailKegiatan->id_variabel_pembangunan) selected @endif>
                    {{ $variabel->nama }} - {{ $variabel->kode_keg }}
                </option>
            @endforeach
        </select><br><br>

        <!-- Dropdown MS Indikator -->
        <label for="id_ms_indikator">MS Indikator</label>
        <select name="id_ms_indikator" id="id_ms_indikator" required>
            <option value="">Select MS Indikator</option>
            @foreach ($msIndikators as $msIndikator)
                <option value="{{ $msIndikator->id_ms_indikator }}"
                    @if($msIndikator->id_ms_indikator == $detailKegiatan->id_ms_indikator) selected @endif>
                    {{ $msIndikator->nama }} - {{ $msIndikator->satuan }}
                </option>
            @endforeach
        </select><br><br>

        <button type="submit">Update</button>
    </form>
</body>

</html>
