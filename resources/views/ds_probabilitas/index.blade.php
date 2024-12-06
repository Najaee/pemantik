<!DOCTYPE html>
<html>
<head>
    <title>Data DS Probabilitas</title>
</head>
<body>
    <h1>Data DS Probabilitas</h1>
    <a href="{{ route('ds_probabilitas.create') }}">Tambah Data</a>
    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Kerangka Sampel Tahap Akhir</th>
                <th>Fraksi Sampel Keseluruhan</th>
                <th>Sampling Eror Variabel Utama</th>
                <th>Unit Sampel</th>
                <th>Responden</th>
                <th>Unit Observasi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($items as $item)
                <tr>
                    <td>{{ $item->id_ds_probabilitas }}</td>
                    <td>{{ $item->kerangka_sampel_tahap_akhir }}</td>
                    <td>{{ $item->fraksi_sampel_keseluruhan }}</td>
                    <td>{{ $item->sampling_eror_var_utama }}</td>
                    <td>{{ $item->unit_sampel }}</td>
                    <td>{{ $item->responden }}</td>
                    <td>{{ $item->unit_observasi }}</td>
                    <td>
                        <a href="{{ route('ds_probabilitas.edit', $item->id_ds_probabilitas) }}">Edit</a>
                        <form action="{{ route('ds_probabilitas.destroy', $item->id_ds_probabilitas) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
