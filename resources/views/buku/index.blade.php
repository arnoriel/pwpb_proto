@extends('layouts.app')

@section('content')

    <div class="container">
        <br>
        <br>
        <center>
        <h5>List Buku</h5>
        </center>
        <div class="card" style="margin: 2%;">
            <div class="card-header bg-success text-white">
                Buku List
                <a href="{{route('buku.create')}}" class="btn btn-sm btn-warning float-right">Tambah buku</a>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th>Nomor</th>
                        <th>Gambar</th>
                        <th>Judul</th>
                        <th>Creator</th>
                        <th>Penerbit</th>
                        <th>No Edisi</th>
                        <th>Aksi</th>
                    </tr>
                    @php $no=1 @endphp
                    @foreach ($buku as $item)
                    <tr>
                        <td>{{$no++}}</td>
                        <td><img src="{{$item->gambar()}}" alt="" style="width: 200px;"></td>
                        <td>{{$item->judul}}</td>
                        <td>{{$item->creator}}</td>
                        <td>{{$item->penerbit}}</td>
                        <td>{{$item->no_edisi}}</td>
                        <td>
                            <form action="{{route('buku.destroy',$item->id)}}" method="post">
                                @method('delete')
                                @csrf
                                <a href="{{route('buku.edit',$item->id)}}" class="btn btn-info">Edit</a>
                                <a href="{{route('buku.show',$item->id)}}" class="btn btn-warning">Show</a>
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin menghapus')">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    @endsection
  