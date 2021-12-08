@extends('layout.bahagia')
@section('title','Data Absen Pegawai')
@section('konten')

@section('judulhalaman', 'Daftar Absensi Pegawai')

<html>
<head>
</head>
<body>

	<h3>Edit Pegawai</h3>

	<a href="/pegawai"> Kembali</a>

	<br/>
	<br/>

	@foreach($pegawai as $p)
	<form action="/pegawai/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->pegawai_id }}">
        <br/>
        <label class="col-sm-2 control-label">Nama</label>
        <div class="col-sm-10">
            <input type="text" required="required" name="nama" value="{{ $p->pegawai_nama }}">
        </div>
        <br>
        <label class="col-sm-2 control-label">Jabatan</label>
        <div class="col-sm-10">
            <input type="text" required="required" name="jabatan" value="{{ $p->pegawai_jabatan }}">
        </div>
        <br>
        <label class="col-sm-2 control-label">Umur</label>
        <div class="col-sm-10">
            <input type="number" required="required" name="umur" value="{{ $p->pegawai_umur }}">
        </div>
        <br>
        <label class="col-sm-2 control-label">Alamat</label>
        <div class="col-sm-10">
            <input type="text" required="required" name="alamat" value="{{ $p->pegawai_alamat }}">
        </div>
        <br>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
</body>
</html>
@endsection
