@extends('layouts.app')

@section('content')

    <div class="container">
        <center>
        <h5>List Buku Populer</h5>
        </center>
        <div class="card" style="margin: 2%;">
            <div class="card-header bg-success text-white">
                Buku List
                <a href="{{route('popbuku.create')}}" class="btn btn-sm btn-warning float-right">Tambah buku</a>
            </div>
            <div class="card-body">
                <table id="myTable">
                    <thead>
                        <tr>
                        <th>Nomor</th>
                        <th>Gambar</th>
                        <th>Judul</th>
                        <th>Creator</th>
                        <th>Aksi</th>
                    </tr>
                    <tbody>
                    @php $no=1 @endphp
                    @foreach ($popbuku as $item)
                    <tr>
                        <td>{{$no++}}</td>
                        <td><img src="{{$item->buku->gambar()}}" alt="" style="width: 100px;"></td>
                        <td>{{$item->buku->judul}}</td>
                        <td>{{$item->buku->creator}}</td>
                        <td>
                            <form action="{{route('popbuku.destroy',$item->id)}}" method="post">
                                @method('delete')
                                @csrf
                                <a href="{{route('popbuku.edit',$item->id)}}" class="btn btn-info"><i class="bi bi-pencil-square"></i></a>
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin menghapus')"><i class="bi bi-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                    </thead>
                </table>
            </div>
        </div>
    </div>
    @endsection