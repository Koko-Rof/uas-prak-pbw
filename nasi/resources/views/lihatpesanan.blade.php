@extends('template')
@section('title', 'Data Pesanan')

@section('konten')
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>

<div class="container">
    <h2> Pesanan yang diterima </h2>
	<div class="row">
        <div class="table-responsive">                
            <table id="mytable" class="table table-bordred table-striped">
                <thead>
                    <th>ID</th>
                    <th>Nama Pemesan</th>
                    <th>Nama Produk</th>
                    <th>Jumlah Pesanan</th>
                    <th>Nomor tempat duduk</th>
                </thead>
            <tbody> 
                @foreach($nasigoreng as $nsi)
                <tr>
                    <td>{{$nsi->id}}</td>
                    <td>{{$nsi->nama_pemesan}}</td>
                    <td>{{$nsi->nama_produk}}</td>
                    <td>{{$nsi->jumlah_pesanan}}</td>
                    <td>{{$nsi->nomor_tempat_duduk}}</td>
                    <td>
                        <a href="/nasigoreng/edit/{{$nsi->id}}">Edit</a>
                        <!-- <a href="">Edit</a>&nbsp;&nbsp;&nbsp; -->
                        <a style="color:red;" href="/nasigoreng/hapus/{{$nsi->id}}">Hapus</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<style>
   body {
    background-color: 	##F5FFFA;
   }
 </style>
@endsection