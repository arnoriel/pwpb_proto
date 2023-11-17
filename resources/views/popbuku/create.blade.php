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
                        <form action="{{route('popbuku.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="">Masukan buku</label>
                                 <select class="form-select" aria-label="Default select example" name="buku_id" id="" >
                                    <option selected>Select buku</option>
                                    @foreach($buku as $item)
                                    <option value="{{$item->id}}">{{ $item->judul }}</option>
                                    @endforeach
                                </select>
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