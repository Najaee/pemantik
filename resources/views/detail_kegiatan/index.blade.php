<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Kegiatan Index</title>
</head>

<body>

    <h1>Detail Kegiatan List</h1>

    <a href="{{ route('detail_kegiatan.create') }}">Create New Detail Kegiatan</a>

    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Kegiatan</th>
                <th>Penyelenggara</th>
                <th>PJ Kegiatan</th>
                <th>PJ Teknis Kegiatan</th>
                <th>Walidata</th>
                <th>PJ Jadwal Kegiatan</th>
                <th>Var Utama Yang Digunakan</th>
                <th>Jumlah Pengumpulan Data</th>
                <th>Rancangan Lap. Publikasi</th>
                <th>Metode Pengolahan</th>
                <th>Produk Data untuk Umum</th>
                <th>Petugas Pengumpulan Data</th>
                <th>Desain Sampel</th>
                <th>Desain Sampel Nonprobabilitas</th>
                <th>Desain Sampel Probabilitas</th>
                <th>Indikator Pembangunan</th>
                <th>Variabel Pembangunan</th>
                <th>MS Indikator</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($detailKegiatans as $index => $detail)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $detail->kegiatan->judul_kegiatan }}</td>
                    <td>{{ $detail->penyelenggara->penanggungjawab }}</td>
                    <td>{{ $detail->pjKegiatan->nama }} - {{ $detail->pjKegiatan->jabatan }}</td>
                    <td>{{ $detail->pjTeknisKegiatan->nama }} - {{ $detail->pjTeknisKegiatan->jabatan }}</td>
                    <td>{{ $detail->walidata->unit_kerja_walidata }}</td>
                    <td>{{ $detail->pjJadwalKegiatan->perencanaan_persiapan }} - {{ $detail->pjJadwalKegiatan->evaluasi }}</td>
                    <td>{{ $detail->varUtamaYgDigunakan->nama }} - {{ $detail->varUtamaYgDigunakan->konsep }}</td>
                    <td>Supervisor: {{ $detail->jmlPengumpulanData->supervisor }} - Enum: {{ $detail->jmlPengumpulanData->enum }}</td>
                    <td>{{ $detail->rancanganLapPublikasi->rancangan_output }} - {{ $detail->rancanganLapPublikasi->rancangan_deskripsi_var }}</td>
                    <td>{{ $detail->metodePengolahan->editing }} - {{ $detail->metodePengolahan->metode_analisis }}</td>
                    <td>{{ $detail->produkDataUtkUmum->spublikasi_tercetak }} - {{ $detail->produkDataUtkUmum->publikasi_elektronik }}</td>
                    <td>{{ $detail->petugasPengumpulanData->cara_pengumpulan_data }} - {{ $detail->petugasPengumpulanData->cakupan_wilayah_data }}</td>
                    <td>{{ $detail->desainSampel->metode_pemilihan_sampel_akhir }} - {{ $detail->desainSampel->jenis_rancangan_sampel }}</td>
                    <td>{{ $detail->dsNonprobabilitas->unit_sampel }} - {{ $detail->dsNonprobabilitas->unit_observasi }}</td>
                    <td>{{ $detail->dsProbabilitas->unit_sampel }} - {{ $detail->dsProbabilitas->responden }}</td>
                    <td>{{ $detail->indikatorPembangunan->nama }}</td>
                    <td>{{ $detail->variabelPembangunan->nama }} - {{ $detail->variabelPembangunan->kode_keg }}</td>
                    <td>{{ $detail->msIndikator->nama }} - {{ $detail->msIndikator->satuan }}</td>
                    <td>
                        <a href="{{ route('detail_kegiatan.edit', $detail->id_detail_kegiatan) }}">Edit</a>
                        <form action="{{ route('detail_kegiatan.destroy', $detail->id_detail_kegiatan) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Are you sure you want to delete this entry?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>
