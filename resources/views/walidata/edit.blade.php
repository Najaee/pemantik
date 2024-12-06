<!DOCTYPE html>
<html>
<head>
    <title>Edit Walidata</title>
</head>
<body>
    <h1>Edit Walidata</h1>
    <form action="{{ route('walidata.update', $walidata->id_walidata) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Unit Kerja Walidata:</label>
        <input type="text" name="unit_kerja_walidata" value="{{ $walidata->unit_kerja_walidata }}" required>
        <label>Email:</label>
        <input type="email" name="email" value="{{ $walidata->email }}" required>
        <button type="submit">Update</button>
    </form>
</body>
</html>

