<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PendapatanController extends Controller
{
    public function index() {
        $pendapatan = DB::table('pendapatan')
       ->join('pegawai', 'pendapatan.IDPegawai', '=', 'pegawai.pegawai_id')
       ->select('pendapatan.*', 'pegawai.pegawai_nama')
       ->paginate();

       DB::table('pagecounter')->increment('Jumlah');
        $pagecounter = DB::table('pagecounter')->get();

       return view('pendapatan.index',['pendapatan' => $pendapatan, 'pagecounter' => $pagecounter]);
    }

    public function tambah()
    {
        $pegawai = DB::table('pegawai')->orderBy('pegawai_nama', 'asc')->get(); //defaultnya urut Primary Key
        // memanggil view add
        return view('pendapatan.tambah', ['pegawai' => $pegawai]);

    }

    public function store(Request $request)
    {

	DB::table('pendapatan')->insert([
		'IDPegawai' => $request->IDPegawai,
		'Bulan' => $request->Bulan,
		'Tahun' => $request->Tahun,
		'Gaji' => $request->Gaji,
        'Tunjangan' => $request->Tunjangan
	]);

	return redirect('/pendapatan');

    }

    public function edit($id) {

	// mengambil data pendapatan berdasarkan id yang dipilih
    $pendapatan = DB::table('pendapatan')->where('ID', $id)->get();

    // mengambil data dari table pegawai
    $pegawai = DB::table('pegawai')->orderBy('pegawai_nama', 'asc')->get(); //defaultnya urut Primary Key

    // passing data absen yang didapat ke view update.blade.php
    return view('pendapatan.edit', ['pendapatan' => $pendapatan,'pegawai' => $pegawai]);
    }

    public function update(Request $request)
    {
	DB::table('pendapatan')->where('ID',$request->id)->update([
		'IDPegawai' => $request->IDPegawai,
		'Bulan' => $request->Bulan,
		'Tahun' => $request->Tahun,
		'Gaji' => $request->Gaji,
        'Tunjangan' => $request->Tunjangan
	]);
	return redirect('/pendapatan');
    }

    public function hapus($id)
    {
	// menghapus data pegawai berdasarkan id yang dipilih
	DB::table('pendapatan')->where('ID',$id)->delete();

	// alihkan halaman ke halaman pegawai
	return redirect('/pendapatan');
    }
}
