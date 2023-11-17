<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Buku</title>
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
                        <form action="{{route('buku.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="">Gambar</label>
                                <input type="file" name="gambar" class="form-control @error('gambar') is-invalid @enderror">
                                @error('gambar')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Judul</label>
                                <input type="text" name="judul" class="form-control @error('judul') is-invalid @enderror">
                                @error('judul')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Creator</label>
                                <input type="text" name="creator" class="form-control @error('creator') is-invalid @enderror">
                                @error('creator')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Genre</label>
                                 <select class="form-select" aria-label="Default select example" name="genre" id="" >
                                    <option selected>Select Genre</option>
                                   <option>Self-Improvement</option>
                                   <option>Fantasy</option>
                                   <option>Education</option>
                                   <option>Sad</option>
                                   <option>Slice of Life</option>
                                   <option>Comedy</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Penerbit</label>
                                <input type="text" name="penerbit" class="form-control @error('penerbit') is-invalid @enderror">
                                @error('penerbit')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Tanggal Terbit Buku</label>
                                <input type="date" name="ttb" class="form-control @error('ttb') is-invalid @enderror">
                                @error('ttb')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Tebal Buku</label>
                                <input type="text" name="tbl_buku" class="form-control @error('tbl_buku') is-invalid @enderror">
                                @error('tbl_buku')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Harga</label>
                                <input type="text" name="harga" class="form-control @error('harga') is-invalid @enderror">
                                @error('harga')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">No Edisi</label>
                                <input type="text" name="no_edisi" class="form-control @error('no_edisi') is-invalid @enderror">
                                @error('no_edisi')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Sinopsis</label>
                                <input type="text" name="sinopsis" class="form-control @error('sinopsis') is-invalid @enderror">
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