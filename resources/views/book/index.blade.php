@extends('layouts.user')

@section('content')
    <div class="row">
        <div class="col-sm-7">
            <div class="col-sm-3">
            </div>
        </div>
        <center>
            <h2><strong>Daftar Buku</strong></h2>
        </center>
        <br>
        <br>
        <br>
        <br>
        <h2><strong>Buku Populer</strong></h2>
        <div class="row">
            @foreach ($popbuku as $item)
                <div class="col">
                    {{-- <a href="/book/{{$item->id}}"> --}}
                    <img src="{{ $item->buku->gambar() }}" style="width: 150px;">
                    <h2><strong>{{ $item->buku->judul }}</strong></h2>
                    <strong>{{ $item->buku->creator }}</strong>
                </div>
            @endforeach
        </div>
        <br>
        <div class="row">
            <div class="col-sm-16">
                <br>
                <br>
                <br>
                <center>
                    <h4><strong>Semua Buku</strong></h4>
                </center>
            </div>
            <br>
            <p><strong>Cari sesuai Nama, Judul, Creator, dan Genre</strong></p>
            <table id="myTable">
                <thead>
                    <tr>
                        <th>Gambar</th>
                        <th>Judul</th>
                        <th>Creator</th>
                        <th>Genre</th>
                    </tr>
                <tbody>
                    @foreach ($buku as $data)
                        <tr>
                            <td><a href="/book/{{ $data->id }}"><img src="{{ $data->gambar() }}"
                                        style="width: 200px;"></a></td>
                            <td><strong>{{ $data->judul }}</strong></td>
                            <td><strong>{{ $data->creator }}</strong></td>
                            <td><strong>{{ $data->genre }}</strong></td>
                        </tr>
                    @endforeach
                </tbody>
                </thead>
            </table>
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
