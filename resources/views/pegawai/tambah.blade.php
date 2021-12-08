@extends('layout.bahagia')
@section('title','Data Absen Pegawai')
@section('konten')

@section('judulhalaman', 'Daftar Absensi Pegawai')

<html>
<head>
	<title>CRUD Data Pegawai</title>
</head>
<body>

	<h3>Data Pegawai</h3>

	<a href="/pegawai"> Kembali</a>

	<br/>
	<br/>

	<form action="/pegawai/store" method="post">
		{{ csrf_field() }}

        <label class="col-sm-2 control-label">Nama</label>
        <div class="col-sm-10">
            <input type="text" name="nama" required="required">
        </div>
		<br/>
        <label class="col-sm-2 control-label">Jabatan</label>
        <div class="col-sm-10">
            <input type="text" name="jabatan" required="required">
        </div>
		<br/>
        <label class="col-sm-2 control-label">Umur</label>
        <div class="col-sm-10">
            <input type="number" name="umur" required="required">
        </div>
		<br/>
        <label class="col-sm-2 control-label">Alamat</label>
        <div class="col-sm-10">
            <input type="text" name="alamat" required="required">
        </div>
		<br/>
		<input type="submit" value="Simpan Data">
	</form>

</body>
</html>
@endsection
