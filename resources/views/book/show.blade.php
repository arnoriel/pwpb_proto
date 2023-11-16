@extends('layouts.user')

@section('content')
            <div class="row">
                <div class="col-sm-4">
            <img src="{{$buku->gambar()}}" style="width: 300px;">
                </div>
                <div class="col">
                    <h2><strong>{{$buku->judul}}</strong></h2>
                    <h5><strong>{{$buku->creator}}</strong></h5>
                    <br>
                    <br>
                    <p><strong>Genre : {{$buku->genre}}</strong></p>
                    <p><strong>Penerbit : {{$buku->penerbit}}</strong></p>
                    <p><strong>Tanggal Terbit : {{$buku->ttb}}</strong></p>
                    <p><strong>Ketebalan Buku : {{$buku->tbl_buku}} Lembar</strong></p>
                    <p><strong>Harga Buku : Rp. {{$buku->harga}}</strong></p>
                    <p><strong>Nomor Edisi : {{$buku->no_edisi}}</strong></p>
                    <a link href="https://wa.me/6285797009915" class="btn btn-outline-dark">Pinjam Buku</a>
            </div>
            </div>
            <br>
            <br>
            <h2><strong>Sinopsis</strong></h2>
            <br>
            <p><strong>{{$buku->sinopsis}}</strong></p>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
      </div>
@endsection