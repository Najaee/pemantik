@extends('layouts.app')

@section('content')
<h1>Edit Metode Pengolahan</h1>

<form action="{{ route('metode_pengolahan.update', $data->id_metode_pengolahan) }}" method="POST">
    @csrf
    @method('PUT')

    <div>
        <label>Editing:</label>
        <input type="text" name="editing" value="{{ old('editing', $data->editing) }}" required>
    </div>

    <div>
        <label>Coding:</label>
        <input type="text" name="coding" value="{{ old('coding', $data->coding) }}" required>
    </div>

    <div>
        <label>Input Data:</label>
        <input type="text" name="input_data" value="{{ old('input_data', $data->input_data) }}" required>
    </div>

    <div>
        <label>Penyahihan:</label>
        <input type="text" name="penyahihan" value="{{ old('penyahihan', $data->penyahihan) }}" required>
    </div>

    <div>
        <label>Microdata/Rawdata:</label>
        <input type="text" name="microdata_rawdata" value="{{ old('microdata_rawdata', $data->microdata_rawdata) }}" required>
    </div>

    <div>
        <label>Metode Lain (Opsional):</label>
        <input type="text" name="metode_lain" value="{{ old('metode_lain', $data->metode_lain) }}">
    </div>

    <div>
        <label>Metode Analisis:</label>
        <input type="text" name="metode_analisis" value="{{ old('metode_analisis', $data->metode_analisis) }}" required>
    </div>

    <div>
        <label>Unit Analisis:</label>
        <input type="text" name="unit_analisis" value="{{ old('unit_analisis', $data->unit_analisis) }}" required>
    </div>

    <div>
        <label>Tingkat Penyajian Data:</label>
        <input type="text" name="tingkat_penyajian_data" value="{{ old('tingkat_penyajian_data', $data->tingkat_penyajian_data) }}" required>
    </div>

    <button type="submit">Simpan Perubahan</button>
</form>
@endsection
