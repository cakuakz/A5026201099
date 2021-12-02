<!DOCTYPE html>
<html>
<head>
	<title>Mengedit Data Absensi</title>
</head>
<body>

	<h2>Edit Absensi Pegawai</h2>

	@foreach($absen as $a)
	<form action="/absen/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $a->ID }}"> <br/>

		IDPegawai <input type="text" required="required" name="IDPegawai" value="{{ $a->IDPegawai }}"> <br/>
		Tanggal <input type="datetime-local" required="required" name="Tanggal" value="{{ $a->Tanggal }}"> <br/>
		Status <input type="text" required="required" name="Status">{{ $a->Status }} <br/>
        <p>
            Keterangan Status: <br>
            I : Izin <br>
            S : Sakit <br>
            A : Alpha <br>
            </p>
        <p><input type="submit" value="Simpan Data"></p>
	</form>
	@endforeach

   <p> <a href="/absen"> Kembali</a></p>

</body>
</html>
