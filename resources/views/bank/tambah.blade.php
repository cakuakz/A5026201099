@extends('layout.bahagia')
@section('title','Data Bank')
@section('konten')

@section('judulhalaman', 'Daftar Absensi Pegawai')

<html>
<head>
	<title></title>
</head>
<body>

	<h3>Data Bank</h3>

	<a href="/bank"> Kembali</a>

	<br/>
	<br/>

	<form action="/bank/store" method="post">
		{{ csrf_field() }}

        <label class="col-sm-2 control-label">Kode</label>
        <div class="col-sm-10">
            <input type="text" name="kodebank" required="required">
        </div>
		<br/>
        <label class="col-sm-2 control-label">Merk</label>
        <div class="col-sm-10">
            <input type="text" name="merkbank" required="required">
        </div>
		<br/>
        <label class="col-sm-2 control-label">Jumlah</label>
        <div class="col-sm-10">
            <input type="number" name="jumlahbank" required="required">
        </div>
		<br/>
        Ketersediaan<br>
        <input type="radio" name="tersedia" value="Y">
        <label for="html">Tersedia</label><br>
        <input type="radio" name="tersedia" value="T" checked="checked">
        <label for="css">Tidak Tersedia</label><br>

		<input type="submit" value="Simpan Data">
	</form>

</body>
</html>
@endsection
