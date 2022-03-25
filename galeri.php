<html>

<head>
  <title>testo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <!-- awal navbar -->
  <nav id="main-navbar" class="navbar navbar-expand-lg navbar-dark bg-dark shadow-lg fixed-top">
    <div class="container-fluid satu">
      <a class="navbar-brand"><img
          src="https://images.unsplash.com/photo-1634034379073-f689b460a3fc?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1780&q=80"
          alt="" width="35" height="29" class="d-inline-block align-text-top">Baleeee</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="home.php" id="navbarDropdown" role="button"
              data-bs-toggle="dropdown" aria-expanded="false">
              Home
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="home.php">Home</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="sejarah.php">Sejarah</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link active " aria-current="page" href="galeri.php">Gallery</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="about.php">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="kontak.php">Contact us</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- akhir navbar -->
  <!-- jumbotron -->
  <div class="container-fluid banner2">
    <div class="container text-center">
      <h4 class="display-6">Selamat Datang</h4>
      <h3 class="display-1">Di Galeri Kopi Indonesia</h3>
      <a href="#galeri">
        <button class="btn btn-danger btn-lg">Cek Galeri</button>
      </a>
    </div>
  </div>
  <!-- akhir jumbotron -->
  <!-- galeri kopi -->
  <div class="container-fluid pt-5 pb-5 ">
    <div class="container text-center">
      <h2 class="display-3">Galeri Kopi</h2>
      <p>Dihalaman ini anda akan melihat berbagai jenis kopi yang ada di seluruh Indonesia mulai dari sabang sampai
        merauke. Dan juga asal usul nama dari kopi tersebut serta bisa dinikmati di berbagai keadaan.</p>
      <div class="row pt-4">
        <div class="col-md-4">
          <span class="lingkaran"><i class="fas fa-home  fa-5x"></i></span>
          <h3 class="mt-3">Rumah</h3>
          <p>Saat libur di rumah</p>
        </div>
        <div class="col-md-4">
          <span class="lingkaran"><i class="fas fa-road fa-5x"></i></span>
          <h3 class="mt-3">Jalan</h3>
          <p>Saat di perjalanan</p>
        </div>
        <div class="col-md-4">
          <span class="lingkaran"><i class="fas fa-building fa-5x"></i></span>
          <h3 class="mt-3">Kantor</h3>
          <p>Saat bekerja di kantor</p>
        </div>
      </div>
    </div>
    <!-- akhir galeri kopi -->
    <!-- kopi gayo -->
    <div class="container-fluid pt-5 pb-5 bg-light galeri">
      <div class="container text-center">
        <h2 class="display-3" id="galeri">Galeri</h2>
        <div class="row pt-4">
          <h2 class="display-6">1. Kopi Gayo atau dikenal Kopi Arabika</h2>
          <p>Karena cita rasanya yang sangat istimewa, kopi arabika organik kualitas terbaik dunia ini, mulai di ekspor
            ke berbagai negara seperti Jepang, Korea Selatan, Amerika Serikat, Kanada dan berbagai negara lain.</p>
          <div class="col-md-3">
            <img src="img/kopi1.jpg" class="img-thumbnail" alt="Cinque Terre">
          </div>
          <div class="col-md-3">
            <img src="img/kopi2.jpg" class="img-thumbnail" alt="Cinque Terre">
          </div>
          <div class="col-md-3">
            <img src="img/kopi3.jpg" class="img-thumbnail" alt="Cinque Terre">
          </div>
          <div class="col-md-3">
            <img src="img/kopi4.jpg" class="img-thumbnail" alt="Cinque Terre">
          </div>
        </div>
      </div>
      <!-- akhir kopi gayo -->
      <!-- kopi lanang -->
      <div class="container-fluid pt-5 pb-5 bg-light galeri">
        <div class="container text-center">
          <div class="row pt-4">
            <h2 class="display-6">2. Kopi Lanang</h2>
            <p>Biji kopi lanang berbentuk hampir bulat melonjong seperti kacang dan cenderung utuh tanpa terbelah. Bentuk ini tentu berbeda dengan biji kopi pada umumnya, yang pipih pada satu bagian dan cembung pada bagian lainnya  seperti biji kacang yang terbelah.
            </p>
            <div class="col-md-3">
              <img src="img/kopi5.jpg" class="img-thumbnail" alt="Cinque Terre">
            </div>
            <div class="col-md-3">
              <img src="img/kopi6.jpg" class="img-thumbnail" alt="Cinque Terre">
            </div>
            <div class="col-md-3">
              <img src="img/kopi7.jpg" class="img-thumbnail" alt="Cinque Terre">
            </div>
            <div class="col-md-3">
              <img src="img/kopi.jpg" class="img-thumbnail" alt="Cinque Terre">
            </div>
          </div>
        </div>
        <!-- akhir kopi lanang -->
        <!-- soon -->
        <div class="container-fluid pt-5 pb-5 bg-light galeri">
        <div class="container text-center">
          <div class="row pt-4">
            <h2 class="display-6">3. Coming Soon</h2>
          </div>
        </div>
        <!-- akhir -->
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>