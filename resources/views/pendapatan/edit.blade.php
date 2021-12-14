@extends('layout.bahagia')
@section('title','Data Pendapatan Pegawai')
@section('konten')

@section('judulhalaman', 'Daftar Pendapatan')
<html>
<head>
	<title></title>
</head>
<body>

	<h3>Edit Pegawai</h3>

	<a href="/pendapatan"> Kembali</a>

	<br/>
	<br/>

	@foreach($pendapatan as $pe)
	<form action="/pendapatan/update" method="post">
		{{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $pe->ID }}"> <br/>
		<br>

        <label class="col-sm-2 control-label">IDPegawai</label>
        <div class="col-sm-10">
            <select name="IDPegawai">
            @foreach($pegawai as $p)
             <option value="{{ $p->pegawai_id }}" @if ($p->pegawai_id === $pe->IDPegawai ) selected="selected" @endif>{{ $p->pegawai_nama }}</option>
            @endforeach
            </select>
        </div>
        <br>
        <br>

		Bulan <input type="number" required="required" name="Bulan" value="{{ $pe->Bulan }}"> <br/>
		Tahun <input type="text" required="required" name="Tahun" value="{{ $pe->Tahun }}"> <br/>
		Gaji <input type="number" required name="Gaji" value="{{ $pe->Gaji }}"> <br/>
        Tunjangan <input type="number" required name="Tunjangan" value="{{ $pe->Tunjangan }}"> <br/>
        <input type="submit" value="Simpan Data">
	</form>
	@endforeach


</body>
</html>
@endsection
