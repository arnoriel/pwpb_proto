@extends('layouts.user')

@section('content')
<div class="row">
    <div class="col-sm-7">
<div class="col-sm-3">
  </div>
  </div>
  <section id="book" class="section">
  <br>
  <br>
  <br>
  <center><h2><strong>Daftar Buku</strong></h2></center>
  <br>
  <br>
  <br>
  <div class="row">
    <div class="col-sm-11">
  <h4><strong>Rekomendasi Buku</strong></h4>
    </div>
    <div class="col">
  <i class="bi bi-funnel"></i>
    </div>
</div>
<br>
<h4><strong>Education</strong></h4>
<br>
<div class="row">
@foreach ($buku as $data)
<div class="col">
  <a href="/book/{{$data->id}}"><img src="{{$data->gambar()}}" style="width: 200px;"></a>
  <h4><strong>{{$data->judul}}</strong></h4>
  <p><strong>{{$data->creator}}</strong></p>
</div>
@endforeach
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
</div>
@endsection