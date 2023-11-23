@extends('layouts.app')

@section('content')
@foreach ($setting as $data)
    <div class="card" style="margin: 3%;">
      <div class="card-header">
        Pengaturan Situs
        <a href="{{route('setting.edit',$data->id)}}" class="btn btn-info"><i class="bi bi-pencil-square"></i></a>
      </div>
      <div class="card-body">
            <table class="table-bordered">
                <tr>
                  <th>Nama Aplikasi</th>
                  <th>Thumbnail Cover</th>
                  <th>Informasi</th>
                  <th>Bio</th>
                </tr>
                <tr>
                  <td>{{$data->aplikasi}}</td>
                  <td><img src="{{$data->gambar()}}" alt="" style="width: 100px;"></td>
                  <td>{{$data->info}}</td>
                  <td>{{$data->bio}}</td>
            </table>
      </div>
    </div>
    @endforeach
@endsection