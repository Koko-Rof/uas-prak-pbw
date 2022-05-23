@extends('template')
@section('title', 'Input Data Pesanan')

@section('konten')
    <form action="/pesannasi/store" method ="get">
        {{csrf_field()}}
        <center>
        Id<br>  <input type=text, name="id", required="required"><br>
        Nama Pemesan<br> <input type=text, name="nama_pemesan", required="required"><br>
        Nama Produk <br><input type=text, name="nama_produk", required="required"><br>
        Jumlah Pesanan <br> <input type=text, name="jumlah_pesanan", required="required"><br>
        Nomor Tempat Duduk <br> <input type=text, name="nomor_tempat_duduk", required="required"><br>
      <br><input type="submit" value="Simpan Data">
        </center>
    </form>
    <style>
   body {
    background-color: #F0F8FF;
   }
 </style>
@endsection