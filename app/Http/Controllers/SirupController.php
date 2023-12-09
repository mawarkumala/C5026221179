<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class SirupController extends Controller
{
	public function indexsirup()
	{
    	// mengambil data dari table pegawai
		//$pegawai = DB::table('pegawai')->get();
        $sirup = DB::table('sirup')->paginate(15);
    	// mengirim data pegawai ke view index
		return view('indexsirup',['sirup' => $sirup]);

	}

	// method untuk menampilkan view form tambah pegawai
	public function tambahsirup()
	{

		// memanggil view tambah
		return view('tambahsirup');

	}

	//method untuk insert data ke table pegawai
	public function store(Request $request)
	{
        if($request->stock>0){
            $tersedia='Y';
        }else {
            $tersedia='N';
        }
		// insert data ke table pegawai
		DB::table('sirup')->insert([
            'kodesirup' => $request->kode,
			'merksirup' => $request->merk,
			'stocksirup' => $request->stock,
			'tersedia' => $tersedia
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/sirup');

	}

	// method untuk edit data pegawai
	public function editsirup($id)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$sirup = DB::table('sirup')->where('kodesirup',$id)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('editsirup',['sirup' => $sirup]);

	}

	// update data pegawai
	public function update(Request $request)
	{
        if($request->stock>0){
            $tersedia='Y';
        }else {
            $tersedia='N';
        }
		// update data pegawai
		DB::table('sirup')->where('kodesirup',$request->id)->update([
			'merksirup' => $request->merk,
			'stocksirup' => $request->stock,
			'tersedia' => $tersedia
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/sirup');
	}

	// method untuk hapus data pegawai
	public function hapus($id)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('sirup')->where('kodesirup',$id)->delete();

		// alihkan halaman ke halaman pegawai
		return redirect('/sirup');
	}

public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    	// mengambil data dari table pegawai sesuai pencarian data
		$sirup = DB::table('sirup')
		->where('merksirup','like',"%".$cari."%")
		->paginate();

    		// mengirim data pegawai ke view index
		return view('indexsirup',['sirup' => $sirup, 'cari' => $cari]);

	}

    public function viewsirup($id)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$sirup = DB::table('sirup')->where('kodesirup',$id)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('viewsirup',['sirup' => $sirup]);

	}

}
