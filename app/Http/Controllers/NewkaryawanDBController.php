<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewkaryawanDBController extends Controller
{
    public function index()
    {
    	// mengambil data dari table karyawan
        $newkaryawan = DB::table('newkaryawan')->get();

    	// mengirim data karyawan ke view index
    	return view('newkaryawan/index',['newkaryawan' => $newkaryawan]);
    }

// method untuk menampilkan view form tambah newkaryawan
    public function tambah(){
        // memanggil view tambah
        return view('newkaryawan/tambah');
    }

    // method untuk insert data ke table newkaryawan
public function store(Request $request)
{
	// insert data ke table newkaryawan
	DB::table('newkaryawan')
        ->insert([
            'NIP' => $request->NIP,
            'nama' => $request->nama,
            'pangkat' => $request->pangkat,
            'gaji' => $request->gaji
        ]);
	// alihkan halaman ke halaman eas
	return redirect('/eas');

}


// update data karyawan
public function update(Request $request)
{
	// update data karyawan
	DB::table('newkaryawan')->where('NIP',$request->NIP)->update([
        'NIP' => $request->NIP,
        'nama' => $request->nama,
        'pangkat' => $request->pangkat,
        'gaji' => $request->gaji
	]);
	// alihkan halaman ke halaman karyawan
	return redirect('/eas');
}



public function hapusdata($NIP)
{
	// mengambil data pegawai berdasarkan id yang dipilih
	$pegawai = DB::table('newkaryawan')
    ->where('NIP',$NIP)
    ->get();
	// passing data pegawai yang didapat ke view edit.blade.php
	return view('eas/hapus',['newkaryawan' => $newkaryawan]);

}




// method untuk hapus data karyawan
public function hapus($NIP)
{
	// menghapus data karyawan berdasarkan id yang dipilih
	DB::table('newkaryawan')
    ->where('NIP',$NIP)
    ->delete();

	// alihkan halaman ke halaman karyawan
	return redirect('/eas');
}

public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table karyawan sesuai pencarian data
		$newkaryawan = DB::table('newkaryawan')
		->where('nama','like',"%".$cari."%")
		->paginate();

    		// mengirim data karyawan ke view index
		return view('newkaryawan/index',['newkaryawan' => $newkaryawan]);

	}

}

