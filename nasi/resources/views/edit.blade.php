@extends('template')
@section('title', 'Edit Data Pesanan')

@section('konten')
    @foreach($nasigoreng as $nsi)
        <form action="/nasigoreng/update" method ="get">
            {{csrf_field()}}
            Id<br>  <input type=text, name="id", required="required", value="{{$nsi->id}}"><br>
            Nama Pemesan<br> <input type=text, name="nama_pemesan", required="required", value="{{$nsi->nama_pemesan}}"><br>
            Nama Produk <br><input type=text, name="nama_produk", required="required", value="{{$nsi->nama_produk}}"><br>
            Jumlah Pesanan <br> <input type=text, name="jumlah_pesanan", required="required", value="{{$nsi->jumlah_pesanan}}"><br>
            Nomor Tempat Duduk <br> <input type=text, name="nomor_tempat_duduk", required="required", value="{{$nsi->nomor_tempat_duduk}}"><br>
            <input type="submit" value="Simpan Data">
        </form>
    @endforeach
@endsection