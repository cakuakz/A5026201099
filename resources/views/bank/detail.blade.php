@extends('layout.bahagia')

@section('title', 'Detail Data Bank')
@section('judulhalaman', 'Detail Data Bank')

@section('konten')


	<a href="/bank"> Kembali</a>

	<br/>
	<br/>

	@foreach($bank as $b)
	<form action="/bank/update" method="post">

		Kode         :  {{ $b->kodebank }} <br/>
		Merk         :  {{ $b->merkbank }} <br/>
		Jumlah       :  {{ $b->jumlahbank }} <br/>
		Ketersediaan :  {{ $b->tersedia }} <br/>

	</form>
	@endforeach


@endsection
