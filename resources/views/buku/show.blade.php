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
                <div class="card" style="margin: 5%;">
                    <div class="card-header bg-success text-white">buku</div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for=""><h5>Gambar</h5></label>
                            <br>
                            <center>
                            <img src="{{$buku->gambar()}}" width="300px">
                            </center>
                            <br>
                            <label for=""><h5>Judul</h5></label>
                            <input type="text" name="judul" value="{{$buku->judul}}" class="form-control" readonly>
                            <br>
                            <label for=""><h5>Creator</h5></label>
                            <input type="text" name="creator" value="{{$buku->creator}}" class="form-control" readonly>
                            <br>
                            <label for=""><h5>Genre</h5></label>
                            <input type="text" name="genre" value="{{$buku->genre}}" class="form-control" readonly>
                            <br>
                            <label for=""><h5>Penerbit</h5></label>
                            <input type="text" name="penerbit" value="{{$buku->penerbit}}" class="form-control" readonly>
                            <br>
                            <label for=""><h5>Tanggal Terbit Buku</h5></label>
                            <input type="date" name="ttb" value="{{$buku->ttb}}" class="form-control" readonly>
                            <br>
                            <label for=""><h5>Tebal Buku</h5></label>
                            <input type="text" name="tbl_buku" value="{{$buku->tbl_buku}} Lembar" class="form-control" readonly>
                            <br>
                            <label for=""><h5>Harga</h5></label>
                            <input type="text" name="harga" value="Rp. {{$buku->harga}}" class="form-control" readonly>
                            <br>
                            <label for=""><h5>Nomor Edisi</h5></label>
                            <input type="text" name="no_edisi" value="{{$buku->no_edisi}}" class="form-control" readonly>
                            <br>
                            <label for=""><h5>Sinopsis</h5></label>
                            <div class="card">
                                <div class="card-body">
                                    {{$buku->sinopsis}}
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <br>
                            <a href="{{url('/buku')}}" class="btn btn-block btn-primary">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>