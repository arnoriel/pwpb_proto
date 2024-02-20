<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $buku->judul }}</title>

    <!-- Fonts -->
    {{-- <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" /> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">

</head>

<body class="antialiased">
    <nav class="navbar navbar-expand-sm navbar-dark fixed-top" style="background-color: #003BA7">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><strong>Tentang Buku {{$buku->judul}}</strong></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          {{-- <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link disabled" aria-disabled="true"></a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" aria-disabled="true"></a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" aria-disabled="true"></a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" aria-disabled="true"></a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" aria-disabled="true"></a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" aria-disabled="true"></a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" aria-disabled="true"></a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" aria-disabled="true"></a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" aria-disabled="true"></a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" aria-disabled="true"></a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" aria-disabled="true"></a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" aria-disabled="true"></a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" aria-disabled="true"></a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" aria-disabled="true"></a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" aria-disabled="true"></a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" aria-disabled="true"></a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" aria-disabled="true"></a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" aria-disabled="true"></a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" aria-disabled="true"></a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" aria-disabled="true"></a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" aria-disabled="true"></a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" aria-disabled="true"></a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" aria-disabled="true"></a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" aria-disabled="true"></a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" aria-disabled="true"></a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" aria-disabled="true"></a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" aria-disabled="true"></a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" aria-disabled="true"></a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" aria-disabled="true"></a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/beranda">Beranda</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="/book">Buku</a>
              </li>
            </ul>
          </div> --}}
        </div>
      </nav>
    <div class="container">
        
        <br>
        <br>
        <br>
        <a href="/book" class="btn btn-outline-dark"><i class="bi bi-box-arrow-left"></i> Kembali</a> 
        <br>
        <br>
        <div class="row">
            <div class="col-sm-4">
                <img src="{{ $buku->gambar() }}" style="width: 300px;">
            </div>
            <div class="col">
                <h2><strong>{{ $buku->judul }}</strong></h2>
                <h5><strong>{{ $buku->creator }}</strong></h5>
                <br>
                <br>
                <p><strong>Genre : {{ $buku->genre }}</strong></p>
                <p><strong>Penerbit : {{ $buku->penerbit }}</strong></p>
                <p><strong>Tanggal Terbit : {{ $buku->ttb }}</strong></p>
                <p><strong>Ketebalan Buku : {{ $buku->tbl_buku }} Lembar</strong></p>
                <p><strong>Harga Buku : Rp. {{ $buku->harga }}</strong></p>
                <p><strong>Nomor Edisi : {{ $buku->no_edisi }}</strong></p>
                <a link href="https://wa.me/6285797009915" class="btn btn-outline-dark">Pinjam Buku</a>
            </div>
        </div>
        <br>
        <br>
        <h2><strong>Sinopsis</strong></h2>
        <br>
        <p><strong>{{ $buku->sinopsis }}</strong></p>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        })
    </script>
</body>

</html>
