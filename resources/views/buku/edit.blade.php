<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Membuat CRUD menggunakan Laravel PHp dan MySQL</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
  <body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card" style="margin: 10%;">
                    <div class="card-header bg-success text-white"><h5>Tambah buku</h5></div>
                    <div class="card-body">
                        <form action="{{route('buku.update',$buku->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="">Gambar</label>
                                <input type="file" name="gambar" value="{{$buku->gambar}}" class="form-control @error('gambar') is-invalid @enderror">
                                @error('gambar')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">judul</label>
                                <input type="text" name="judul" value="{{$buku->judul}}" class="form-control @error('judul') is-invalid @enderror">
                                @error('judul')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">creator</label>
                                <input type="text" name="creator" value="{{$buku->creator}}" class="form-control @error('creator') is-invalid @enderror">
                                @error('creator')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">genre</label>
                                <input type="text" name="genre" value="{{$buku->genre}}" class="form-control @error('genre') is-invalid @enderror">
                                @error('genre')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">penerbit</label>
                                <input type="text" name="penerbit" value="{{$buku->penerbit}}" class="form-control @error('penerbit') is-invalid @enderror">
                                @error('penerbit')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">ttb</label>
                                <input type="date" name="ttb" value="{{$buku->ttb}}" class="form-control @error('ttb') is-invalid @enderror">
                                @error('ttb')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">tbl_buku</label>
                                <input type="text" name="tbl_buku" value="{{$buku->tbl_buku}}" class="form-control @error('tbl_buku') is-invalid @enderror">
                                @error('tbl_buku')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">harga</label>
                                <input type="text" name="harga" value="{{$buku->harga}}" class="form-control @error('harga') is-invalid @enderror">
                                @error('harga')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">no_edisi</label>
                                <input type="text" name="no_edisi" value="{{$buku->no_edisi}}" class="form-control @error('no_edisi') is-invalid @enderror">
                                @error('no_edisi')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">sinopsis</label>
                                <input type="text" name="sinopsis" value="{{$buku->sinopsis}}" class="form-control @error('sinopsis') is-invalid @enderror">
                                @error('sinopsis')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <br>
                            <div class="form-group">
                                <button type="reset" class="btn btn-outline-warning">Reset</button>
                                <button type="submit" class="btn btn-outline-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>