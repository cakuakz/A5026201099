@extends('layout.bahagia')
@section('title','5026201099-M.Rafi Irfansyah')
@section('konten')

@section('judulhalaman', 'Daftar Pendapatan')
<html>
<head>
	<title>Projek1</title>
</head>
<body>
	<h3>Data Pendapatan</h3>

	<a href="/pendapatan/tambah"> + Tambah Pegawai Baru</a>

	<br/>
	<br/>

	<table class="table table-striped table-hover">
		<tr>
			<th>ID</th>
			<th>Nama Pegawai</th>
			<th>Bulan</th>
			<th>Tahun</th>
			<th>Gaji</th>
            <th>Tunjangan</th>
            <th>Opsi</th>
            <th>Views Page</th>
		</tr>
		@foreach($pendapatan as $p)
		<tr>
			<td>{{ $p->ID }}</td>
            <td>{{ $p->pegawai_nama }}</td>
			<td>{{ $p->Bulan }}</td>
			<td>{{ $p->Tahun }}</td>
            <td>{{ $p->Gaji }}</td>
            <td>{{ $p->Tunjangan }}</td>
			<td>
				<a href="/pendapatan/edit/{{ $p->ID}}">Edit</a>
				|
				<a href="/pendapatan/hapus/{{ $p->ID }}">Hapus</a>
			</td>
            @foreach ($pagecounter as $pc)
            <td>{{ $pc->Jumlah }}</td>
            @endforeach
		</tr>
		@endforeach
	</table>


</body>
</html>
@endsection
