<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">Laravel</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/mahasiswa">Pasien</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/profile">Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/about">About</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<div class="container">
<h1> Ini adalah halaman Tambah Pasien</h1>

  <div class="col-sm-12">
    <h4>Form Pasien</h4>
    <form action="" method="GET">
      <div class="row">
        <div class="col-sm-6">
          <label for="">NIK</label>
          <input type="number" name="npm" class="form-control" placeholder="Input NPM">
        </div>
        <div class="col-sm-6">
          <label for="">Nama Pasien</label>
          <input type="text" name="nama_mahasiswa" class="form-control" placeholder="Input Nama Mahasiswa">
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6">
          <label for="">Tanggal Lahir</label>
          <input type="date" name="tanggal_lahir" class="form-control">
        </div>
      </div>
      <div class="row mt-2">
        <div class="col-sm-6">
          <button class="btn btn-primary" style="width:100%" type="submit">Simpan</button>
        </div>
        <div class="col-sm-6">
          <a href="/pasien" class="btn btn-secondary" style="width:100%">Kembali</a>
        </div>
      </div>
    </form>
  </div>
</div>

</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>