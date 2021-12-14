@extends('layout.bahagia')
@section('title','Data Absen Pegawai')
@section('konten')

@section('judulhalaman', 'Daftar Absensi Pegawai')

<html>
<head>
	<title>CRUD Data Pegawai</title>
</head>
<body>

    <br>

	<a href="/pegawai/tambah"> + Tambah Pegawai Baru</a>

	<br/>
	<br/>

        <form action="/pegawai/cari" method="GET">
            <input type="text" class="form-control" name="cari" placeholder="Cari Pegawai berdasarkan nama atau alamat .." value="{{ old('cari') }}">
            <br>
            <input type="submit" class="btn btn-default center-block" value="cari">
        </form>
    <br>

	<table class="table table-striped table-hover">
		<tr>
			<th>Nama</th>
			<th>Jabatan</th>
			<th>Umur</th>
			<th>Alamat</th>
			<th>Opsi</th>
		</tr>
		@foreach($pegawai as $p)
		<tr>
			<td>{{ $p->pegawai_nama }}</td>
			<td>{{ $p->pegawai_jabatan }}</td>
			<td>{{ $p->pegawai_umur }}</td>
			<td>{{ $p->pegawai_alamat }}</td>
			<td>
                <a class="btn btn-primary btn-sm" href="/pegawai/view/{{ $p->pegawai_id }}">View</a>
                |
				<a class="btn btn-primary btn-sm" href="/pegawai/edit/{{ $p->pegawai_id }}">Edit</a>
				|
				<a class="btn btn-danger btn-sm" href="/pegawai/hapus/{{ $p->pegawai_id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
    {{ $pegawai->links() }}


</body>
</html>
@endsection
