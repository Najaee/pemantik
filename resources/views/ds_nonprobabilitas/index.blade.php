<!DOCTYPE html>
<html>
<head>
    <title>Data DS Nonprobabilitas</title>
</head>
<body>
    <h1>Data DS Nonprobabilitas</h1>
    <a href="{{ route('ds_nonprobabilitas.create') }}">Tambah Data</a>
    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Unit Sampel</th>
                <th>Unit Observasi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($items as $item)
                <tr>
                    <td>{{ $item->id_ds_nonprobabilitas }}</td>
                    <td>{{ $item->unit_sampel }}</td>
                    <td>{{ $item->unit_observasi }}</td>
                    <td>
                        <a href="{{ route('ds_nonprobabilitas.edit', $item->id_ds_nonprobabilitas) }}">Edit</a>
                        <form action="{{ route('ds_nonprobabilitas.destroy', $item->id_ds_nonprobabilitas) }}" method="POST" style="display:inline;">
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
