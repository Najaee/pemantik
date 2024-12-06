<!DOCTYPE html>
<html>
<head>
    <title>Daftar TTD</title>
</head>
<body>
    <h1>Daftar TTD</h1>
    <a href="{{ route('ttd.create') }}">Tambah Data</a>
    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif
    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Waktu & Tempat</th>
                <th>Kepala Dinas</th>
                <th>NIP</th>
                <th>TTD Image</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td>{{ $item->id_ttd }}</td>
                    <td>{{ $item->waktu_tempat }}</td>
                    <td>{{ $item->kep_dinas }}</td>
                    <td>{{ $item->nip }}</td>
                    <td>
                        <img src="{{ asset('storage/' . $item->ttd_image) }}" alt="TTD Image" width="100">
                    </td>
                    <td>
                        <a href="{{ route('ttd.edit', $item->id_ttd) }}">Edit</a>
                        <form action="{{ route('ttd.destroy', $item->id_ttd) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
