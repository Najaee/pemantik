<!DOCTYPE html>
<html>
<head>
    <title>Data Walidata</title>
</head>
<body>
    <h1>Data Walidata</h1>
    <a href="{{ route('walidata.create') }}">Tambah Walidata</a>
    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Unit Kerja Walidata</th>
                <th>Email</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($walidatas as $walidata)
                <tr>
                    <td>{{ $walidata->id_walidata }}</td>
                    <td>{{ $walidata->unit_kerja_walidata }}</td>
                    <td>{{ $walidata->email }}</td>
                    <td>
                        <a href="{{ route('walidata.edit', $walidata->id_walidata) }}">Edit</a>
                        <form action="{{ route('walidata.destroy', $walidata->id_walidata) }}" method="POST" style="display:inline;">
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
