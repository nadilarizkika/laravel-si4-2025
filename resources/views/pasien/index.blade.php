<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pasien</title>
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
<h1> Ini adalah halaman Pasien</h1>

<div class="row">
  <div class="col-sm-6">
    <h4>Tabel Pasien</h4>
  </div>
  <div class="col-sm-6" style="text-align: right">
    <a href='/pasien/create' class="btn btn-info btn-sm">Tambah Pasien</a>
  </div>
</div>

<div class="row">
  <div class="col-sm-12">
    @if (Session::has('success'))
        {{-- <div class="pt-3">
          <div class="aler alert-success">
            {{Session::get('success')}}
          </div>
        </div> --}}

        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Succesfully!</strong> {{Session::get('success')}}.
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
  </div>
</div>

<div class="row">
  <div class="col-sm-12">
    <table class="table table-danger table-sm table-hover table-striped table-bordered text-center">
      <thead>
        <tr>
          <th>NIK</th>
          <th>Nama Pasien</th>
          <th>Tanggal Lahir</th>
        </tr>
      </thead>
      <tbody>
        
      </tbody>
    </table>
  </div>
</div>

</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>