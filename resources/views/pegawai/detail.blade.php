@extends('layout.bahagia')

@section('title', 'Mengedit Data Pegawai')
@section('judulhalaman', 'Mengedit Data Pegawai')

@section('konten')


	<a href="/pegawai"> Kembali</a>

	<br/>
	<br/>

	@foreach($pegawai as $p)
	<form action="/pegawai/update" method="post">

		Nama:  {{ $p->pegawai_nama }} <br/>
		Jabatan:  {{ $p->pegawai_jabatan }} <br/>
		Umur:  {{ $p->pegawai_umur }} <br/>
		Alamat:  {{ $p->pegawai_alamat }} <br/>

	</form>
	@endforeach


@endsection
