@extends('layout.bahagia')
@section('title','Data Bank')
@section('konten')

@section('judulhalaman', 'Daftar Bank')

<html>
<head>
</head>
<body>

	<h3>Edit Pegawai</h3>

	<a href="/bank"> Kembali</a>

	<br/>
	<br/>

	@foreach($bank as $b)
	<form action="/bank/update" method="post">

        {{ csrf_field() }}

        <input type="hidden" name="kodebank" value="{{ $b->kodebank }}">
        <br/>

        <label class="col-sm-2 control-label">Merk</label>
        <div class="col-sm-10">
            <input type="text" required="required" name="merkbank" value="{{ $b->merkbank }}">
        </div>
        <br>

        <label class="col-sm-2 control-label">Jumlah</label>
        <div class="col-sm-10">
            <input type="number" required="required" name="jumlahbank" value="{{ $b->jumlahbank }}">
        </div>
        <br>

        Status<br/>
                <input type="radio" id="html" name="tersedia" value="Y" @if ($b->tersedia === 'Y' ) checked="checked" @endif>
                <label for="html">Tersedia</label><br>
                <input type="radio" id="css" name="tersedia" value="T"  @if ($b->tersedia === 'T' ) checked="checked" @endif>
                <label for="css">Tidak Tersedia</label><br>

	 <p><input type="submit" value="Simpan Data"></p>
	</form>
    <p> <a href="/bank"> Kembali</a></p>
	@endforeach
</body>
</html>
@endsection
