<!DOCTYPE html>
<html lang="en">
<b>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>


<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../barang/index.php">Barang</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../jenis/index.php">Jenis</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
  </div>
</nav>
<div class="container">
    <h1>Data Barang</h1>
    <br></br>
    <form action="proses_tambah.php" method="post">

  <div class="mb-3">
    <label for="ID BARANG" class="form-label">ID BARANG</label>
    <input type="number" class="form-control" id="ID BARANG" aria-describedby="ID BARANG" name="id_barang">
  </div>
<div class="mb-3">
    <label for="NAMA BARANG" class="form-label">NAMA BARANG</label>
    <input type="text" class="form-control" id="" aria-describedby="NAMA BARANG" name="nama_barang">
  </div>
  <div class="mb-3">
    <label for="ID JENIS" class="form-label">ID JENIS</label>
    <input type="number" class="form-control" id="ID JENIS" name="id_jenis">
  </div>
  <div class="mb-3">
    <label for="HARGA" class="form-label">HARGA</label>
    <input type="number" class="form-control" id="HARGA" name="harga">
  </div>
  <div class="mb-3">
    <label for="STOK" class="form-label">STOK</label>
    <input type="number" class="form-control" id="STOK" name="stok">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form> 
</div>
</body>
  
</html>