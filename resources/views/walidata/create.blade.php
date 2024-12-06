<!DOCTYPE html>
<html>
<head>
    <title>Tambah Walidata</title>
</head>
<body>
    <h1>Tambah Walidata</h1>
    <form action="{{ route('walidata.store') }}" method="POST">
        @csrf
        <label>Unit Kerja Walidata:</label>
        <input type="text" name="unit_kerja_walidata" required>
        <label>Email:</label>
        <input type="email" name="email" required>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>
