<!DOCTYPE html>
<html>
<head>
    <title>Tambah DS Nonprobabilitas</title>
</head>
<body>
    <h1>Tambah DS Nonprobabilitas</h1>
    <form action="{{ route('ds_nonprobabilitas.store') }}" method="POST">
        @csrf
        <label>Unit Sampel:</label>
        <input type="text" name="unit_sampel" required>
        <label>Unit Observasi:</label>
        <input type="text" name="unit_observasi" required>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>
