<!DOCTYPE html>
<html>
<head>
    <title>Data Variabel Utama yang Digunakan</title>
</head>
<body>
    <h1>Data Variabel Utama yang Digunakan</h1>
    <a href="{{ route('var_utama_yg_digunakan.create') }}">Tambah Data</a>
    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Konsep</th>
                <th>Definisi</th>
                <th>Referensi Waktu</th>
                <th>Sumber</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($vars as $var)
                <tr>
                    <td>{{ $var->id_var_utama_yg_digunakan }}</td>
                    <td>{{ $var->nama }}</td>
                    <td>{{ $var->konsep }}</td>
                    <td>{{ $var->definisi }}</td>
                    <td>{{ $var->referensi_waktu }}</td>
                    <td>{{ $var->sumber }}</td>
                    <td>
                        <a href="{{ route('var_utama_yg_digunakan.edit', $var->id_var_utama_yg_digunakan) }}">Edit</a>
                        <form action="{{ route('var_utama_yg_digunakan.destroy', $var->id_var_utama_yg_digunakan) }}" method="POST" style="display:inline;">
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
