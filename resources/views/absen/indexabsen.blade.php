@extends('layout.bahagia')
@section('title','Data Absen Pegawai')
@section('konten')

@section('judulhalaman', 'Daftar Absensi Pegawai')
<head>
	<title>CRUD Tabel Absen</title>
</head>

    <body>
        <div>



            <a href="/absen/add"> + Tambah Absensi</a>

            <br/>
            <br/>

            <table class="table table-striped table-hover">
                <tr>

                    <th>Nama Pegawai</th>
                    <th>Tanggal</th>
                    <th>Status</th>
                    <th>Opsi</th>
                </tr>
                @foreach($absen as $a)
                <tr>

                    <td>{{ $a->pegawai_nama }}</td>
                    <td>{{ $a->Tanggal }}</td>
                    <td>{{ $a->Status }}</td>
                    <td>
                        <a class="btn btn-primary btn-sm" href="/absen/edit/{{ $a->ID }}">Edit Absensi</a>
                        |
                        <a class="btn btn-danger btn-sm" href="/absen/hapus/{{ $a->ID }}">Delete Absensi</a>
                    </td>
                </tr>
                @endforeach
            </table>
            <p>
                Keterangan Status: <br>
                I : Izin <br>
                S : Sakit <br>
                A : Alpha <br>
                </p>

        </div>




    </body>



@endsection
