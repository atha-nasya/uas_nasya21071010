@extends('layout.main')
@section('content')


<h3>Tambah Nilai Siswa</h3>
<form action="{{ route('kurikulum.store') }}" method="POST">
    @csrf
<table>
    <tr>
        <td>Nama Guru</td><td><input type="text" name="nama_guru"></td>
    </tr>
    <tr>
        <td>Nama Siswa</td><td><input type="text" name="nama_siswa"></td>
    </tr>
    <tr>
    <tr>
        <td>Kurikulum</td><td><input type="text" name="nama_kurikulum"></td>
    </tr>
    <tr>
        <td><input type="submit" value="Kirim"></td>
    </tr>
</table>
</form>

@endsection