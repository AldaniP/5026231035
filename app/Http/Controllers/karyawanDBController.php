<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class karyawanDBController extends Controller
{
    public function index()
    {
    	// mengambil data dari table karyawan
        $karyawan = DB::table('karyawan')->paginate(10);

    	// mengirim data karyawan ke view index
    	return view('karyawan/index',['karyawan' => $karyawan]);
    }

// method untuk menampilkan view form tambah karyawan
    public function tambah(){
        // memanggil view tambah
        return view('karyawan/tambah');
    }

    // method untuk insert data ke table karyawan
public function store(Request $request)
{
	// insert data ke table karyawan
	DB::table('karyawan')
        ->insert([
            'kodepegawai' => $request->kodepegawai,
            'namalengkap' => $request->namalengkap,
            'divisi' => $request->divisi,
            'departemen' => $request->departemen
        ]);
	// alihkan halaman ke halaman karyawan
	return redirect('/karyawan');

}


// update data karyawan
public function update(Request $request)
{
	// update data karyawan
	DB::table('karyawan')->where('kodepegawai',$request->kodepegawai)->update([
        'kodepegawai' => $request->kodepegawai,
		'namalengkap' => $request->namalengkap,
        'divisi' => $request->divisi,
        'departemen' => $request->departemen
	]);
	// alihkan halaman ke halaman karyawan
	return redirect('/karyawan');
}

// method untuk hapus data karyawan
public function hapus($kodepegawai)
{
	// menghapus data karyawan berdasarkan id yang dipilih
	DB::table('karyawan')
    ->where('kodepegawai',$kodepegawai)
    ->delete();

	// alihkan halaman ke halaman karyawan
	return redirect('/karyawan');
}

public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table karyawan sesuai pencarian data
		$karyawan = DB::table('karyawan')
		->where('namalengkap','like',"%".$cari."%")
		->paginate();

    		// mengirim data karyawan ke view index
		return view('karyawan/index',['karyawan' => $karyawan]);

	}

}

