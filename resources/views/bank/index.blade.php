@extends('layout.bahagia')
@section('title','Data Bank')
@section('konten')

@section('judulhalaman', 'Daftar Bank')

<html>
<head>
	<title>CRUD Data Pegawai</title>
</head>
<body>

    <br>

	<a href="/bank/tambah"> + Tambah Bank Baru</a>

	<br/>
	<br/>

        <form action="/bank/cari" method="GET">
            <input type="text" class="form-control" name="cari" placeholder="Cari Bank berdasarkan nama atau ketersediaan .." value="{{ old('cari') }}">
            <br>
            <input type="submit" class="btn btn-default center-block" value="cari">
        </form>
    <br>

	<table class="table table-striped table-hover">
		<tr>
			<th>Kode Bank</th>
			<th>Merk Bank</th>
			<th>Jumlah Bank</th>
			<th>Ketersediaan</th>
		</tr>
		@foreach($bank as $b)
		<tr>
			<td>{{ $b->kodebank }}</td>
			<td>{{ $b->merkbank }}</td>
			<td>{{ $b->jumlahbank }}</td>
			<td>{{ $b->tersedia }}</td>
			<td>
                <a class="btn btn-primary btn-sm" href="/bank/view/{{ $b->kodebank }}">View</a>
                |
				<a class="btn btn-primary btn-sm" href="/bank/edit/{{ $b->kodebank }}">Edit</a>
				|
				<a class="btn btn-danger btn-sm" href="/bank/hapus/{{ $b->kodebank }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
    <p>
        Keterangan Status: <br>
        Y : Tersedia <br>
        T : Tidak Tersedia <br>
    </p>
    {{ $bank->links() }}


</body>
</html>
@endsection
