<!DOCTYPE html>
<html>
<head>
    <title>Edit DS Nonprobabilitas</title>
</head>
<body>
    <h1>Edit DS Nonprobabilitas</h1>
    <form action="{{ route('ds_nonprobabilitas.update', $dsNonprobabilitas->id_ds_nonprobabilitas) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Unit Sampel:</label>
        <input type="text" name="unit_sampel" value="{{ $dsNonprobabilitas->unit_sampel }}" required>
        <label>Unit Observasi:</label>
        <input type="text" name="unit_observasi" value="{{ $dsNonprobabilitas->unit_observasi }}" required>
        <button type="submit">Update</button>
    </form>
</body>
</html>
