<html>
<head>
	<title></title>
</head>
<body>

	<h3>Edit Pegawai</h3>

	<a href="/pendapatan"> Kembali</a>

	<br/>
	<br/>

	@foreach($pendapatan as $p)
	<form action="/pendapatan/update" method="post">
		{{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $p->ID }}"> <br/>
		IDPegawai <input type="number" required="required" name="IDPegawai" value="{{ $p->IDPegawai }}"> <br/>
		Bulan <input type="number" required="required" name="Bulan" value="{{ $p->Bulan }}"> <br/>
		Tahun <input type="text" required="required" name="Tahun" value="{{ $p->Tahun }}"> <br/>
		Gaji <input type="number" required name="Gaji" value="{{ $p->Gaji }}"> <br/>
        Tunjangan <input type="number" required name="Tunjangan" value="{{ $p->Tunjangan }}"> <br/>
        <input type="submit" value="Simpan Data">
	</form>
	@endforeach


</body>
</html>
