<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Guru;

class GuruController extends Controller
{
    // Menampilkan data guru
    public function index()
    {
        $guru = Guru::paginate(10);
        return view('guru', ['guru' => $guru]);
    }

    // Hapus sementara
    public function hapus($id)
    {
        $guru = Guru::find($id);
    	$guru->delete();

        return redirect('/guru');
    }

    // Menampilkan data guru yang sudah dihapus
    public function trash()
    {
        // Mengambil data guru yang sudah dihapus (soft deleted)
        $guru = Guru::onlyTrashed()->get();
        return view('guru_trash', ['guru' => $guru]);
    }

    // Mengembalikan data guru yang sudah dihapus
    public function kembalikan($id)
    {
        $guru = Guru::onlyTrashed()->where('id',$id);
    	$guru->restore();
        return redirect('/guru/trash');
    }
    // restore semua data guru yang sudah dihapus
    public function kembalikan_semua()
    {
    		
    	$guru = Guru::onlyTrashed();
    	$guru->restore();
 
    	return redirect('/guru/trash');
    }
    // hapus permanen
    public function hapus_permanen($id)
    {
    	// hapus permanen data guru
    	$guru = Guru::onlyTrashed()->where('id',$id);
    	$guru->forceDelete();
 
    	return redirect('/guru/trash');
    }
    // hapus permanen semua guru yang sudah dihapus
    public function hapus_permanen_semua()
    {
    	// hapus permanen semua data guru yang sudah dihapus
    	$guru = Guru::onlyTrashed();
    	$guru->forceDelete();
 
    	return redirect('/guru/trash');
    }
    public function cari(Request $request)
    {
    $cari = $request->cari;

    // mengambil data dari table karyawan sesuai pencarian data
    $guru = Guru::where('nama', 'like', "%$cari%")->paginate();
    return view('guru', ['guru' => $guru]);
    }
}
