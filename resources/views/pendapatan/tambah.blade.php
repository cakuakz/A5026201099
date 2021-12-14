@extends('layout.bahagia')
@section('title','Data Pendapatan Pegawai')
@section('konten')

@section('judulhalaman', 'Daftar Pendapatan')

<html>
<head>
	<title>Projek1</title>
</head>
<body>

	<h3>Data Pendapatan</h3>

	<a href="/pendapatan"> Kembali</a>

	<br/>
	<br/>

	<form action="/pendapatan/store" method="post">
		{{ csrf_field() }}

		<label class="col-sm-2 control-label">IDPegawai</label>
        <div class="col-sm-10">
            <select name="IDPegawai">
            @foreach($pegawai as $p)
            <option value="{{ $p->pegawai_id }}">{{ $p->pegawai_nama }}</option>
            @endforeach
            </select>
        </div>
        <br>
		Bulan <input type="number" name="Bulan" required="required"> <br/>
		Tahun <input type="text" name="Tahun" required="required"> <br/>
        Gaji <input type="number" name="Gaji" required="required"> <br/>
        Tunjangan <input type="number" name="Tunjangan" required="required"> <br/>
		<input type="submit" value="Simpan Data">
	</form>

</body>
</html>
@endsection

