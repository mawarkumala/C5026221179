<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CounterController extends Controller
{
//     public function indexcounter()
//     {
//         $this->updateCounter(); // Panggil fungsi updateCounter sebelum menampilkan halaman
//         $jumlahPengunjung = $this->getCounter();

//         return view('indexcounter', compact('jumlahPengunjung'));
//     }

//     private function updateCounter()
//     {
//         // Update jumlah pengunjung
//         DB::table('counter')->where('ID', 1)->increment('Jumlah');
//     }

//     private function getCounter()
//     {
//         // Ambil nilai Jumlah
//         return DB::table('counter')->where('ID', 1)->value('Jumlah');
//     }
// }

//Cara cepet
public function indexcounter()
	{
    	// Update jumlah terlebih dahulu
        DB::table('counter')->increment('Jumlah');

        // Ambil nilai Jumlah setelah diupdate
        $jumlahPengunjung = DB::table('counter')->where('ID', 1)->value('Jumlah');

        // Tampilkan view dengan data jumlah pengunjung
        return view('indexcounter', ['jumlahPengunjung' => $jumlahPengunjung]);
	}
    public function viewcounter($id)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$karyawan = DB::table('counter')->where('jumlahPengunjung',$id)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('viewcounter',['counter' => $counter]);

	}
}
