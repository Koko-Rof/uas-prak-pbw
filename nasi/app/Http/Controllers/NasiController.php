<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class NasiController extends Controller
{
    public function readdata()
    {
        //mau ambil data dari tabel mahasiswa
        $nasigoreng= DB::table('nasigoreng')->get();

        // mengirim ke halaman mahasiswa untuk ditampilkan data
        return view('lihatpesanan',['nasigoreng'=>$nasigoreng]);
    }

    public function input()
    {
        return view('pesannasi');
    }

    public function store(Request $request)
    {
        //memasukkan data kedalam databse
        DB::table('nasigoreng')->insert([
            'id' => $request->id,
            'nama_pemesan' => $request->nama_pemesan,
            'nama_produk' => $request->nama_produk,
            'jumlah_pesanan' => $request->jumlah_pesanan,
            'nomor_tempat_duduk' => $request->nomor_tempat_duduk
        ]);

        return redirect('/lihatpesanan');
    }

    public function edit($id)
    {
        #ambil data mahasiswa berdasarkan nim
        $nasigoreng = DB::table('nasigoreng')->where('id', $id)->get();

        #passing data
        return view('edit', ['nasigoreng' => $nasigoreng]);
    }

    public function update(Request $request)
    {
        DB::table('nasigoreng')->where('id', $request->id)->update([
            'id' => $request->id,
            'nama_pemesan' => $request->nama_pemesan,
            'nama_produk' => $request->nama_produk,
            'jumlah_pesanan' => $request->jumlah_pesanan,
            'nomor_tempat_duduk' => $request->nomor_tempat_duduk
        ]);

        return redirect('/lihatpesanan');
    }

    public function hapus($id)
    {
        DB::table('nasigoreng')->where('id', $id)->delete();
        return redirect('/lihatpesanan');
    }
}