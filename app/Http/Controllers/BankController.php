<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BankController extends Controller
{
    public function indexbank() {

        $bank = DB::table('bank')->paginate(5);

        DB::table('pagecounter')->increment('Jumlah');
        $pagecounter = DB::table('pagecounter')->get();


        return view('bank.index', ['bank' => $bank, 'pagecounter' => $pagecounter]);
    }


    public function add() {
        return view('bank.tambah');
    }


    public function store(Request $request)
    {

        DB::table('bank')->insert([

            'kodebank' => $request->kodebank,
            'merkbank' => $request->merkbank,
            'jumlahbank' => $request->jumlahbank,
            'tersedia' => $request->tersedia
        ]);

        return redirect('/bank');
    }


    public function edit($id)
    {

        $bank = DB::table('bank')->where('kodebank', $id)->get();


        return view('bank.edit', ['bank' => $bank]);
    }


    public function update(Request $request)
    {

        DB::table('bank')->where('kodebank',$request->kodebank)->update([

            'merkbank' => $request->merkbank,
            'jumlahbank' => $request->jumlahbank,
            'tersedia' => $request->tersedia
        ]);

        return redirect('/bank');
    }


    public function hapus($id)
    {
        // menghapus data absen berdasarkan id yang dipilih
        DB::table('bank')->where('kodebank',$id)->delete();

        // alihkan halaman ke halaman absen
        return redirect('/bank');
    }

    public function cari(Request $request) {
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table pegawai sesuai pencarian data
		$bank = DB::table('bank')
		->where('merkbank','like',"%".$cari."%")
        ->orWhere('tersedia', 'like', "%".$cari."%")
		->paginate();

    		// mengirim data pegawai ke view index
		return view('bank.index',['bank' => $bank]);

	}


    public function detail($id) {
        // mengambil data pegawai berdasarkan id yang dipilih
        $bank = DB::table('bank')->where('kodebank', $id)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('bank.detail', ['bank' => $bank]);
    }
}
