<!DOCTYPE html>
<html>
<head>
    <title>Daftar Produk Data untuk Umum</title>
</head>
<body>
    <h1>Daftar Produk Data untuk Umum</h1>
    <a href="{{ route('produk_data_utk_umum.create') }}">Tambah Data</a>
    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif
    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Publikasi Tercetak</th>
                <th>Publikasi Elektronik</th>
                <th>Publikasi Data Mikro</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td>{{ $item->id_produk_data_utk_umum }}</td>
                    <td>{{ $item->spublikasi_tercetak }}</td>
                    <td>{{ $item->publikasi_elektronik }}</td>
                    <td>{{ $item->publikasi_data_mikro }}</td>
                    <td>
                        <a href="{{ route('produk_data_utk_umum.edit', $item->id_produk_data_utk_umum) }}">Edit</a>
                        <form action="{{ route('produk_data_utk_umum.destroy', $item->id_produk_data_utk_umum) }}" method="POST" style="display:inline;">
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
