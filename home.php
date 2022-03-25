<html>

<head>
  <title>testo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
    integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <!-- navbar -->
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
              <li><a class="dropdown-item" href="home.php">home</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#sejarah">Sejarah</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="galeri.php">Gallery</a>
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
  <div class="container-fluid banner">
    <div class="container text-center">
      <h4 class="display-6">Selamat Datang</h4>
      <h3 class="display-1">Halo Guys!</h3>
      <a href="about.php">
        <button type="button" class="btn btn-danger btn-lg mt-3">Cek Profile</button>
      </a>
      <a href="kontak.php">
        <button type="button" class="btn btn-danger btn-lg mt-3">Hubungi Kami</button>
      </a>
    </div>
  </div>
  <!-- akhir jumbotron -->
  <!-- definisi -->
  <div class="container-fluid pt-5 pb-5">
    <div class="container text-center">
      <h2 class="display-3">Kopi</h2>
      <p>Kopi adalah minuman hasil seduhan biji kopi yang telah melalui proses roasting dan dihaluskan menjadi bubuk.
        Jenis kopi yang beredar secara luas adalah arabika, robusta, dan liberika. Kopi merupakan minuman ke-2
        terpopuler di dunia setelah teh. Bagi banyak orang, kopi bukan sekedar minuman selingan tapi adalah bagian dari
        gaya hidup.</p>
      <div class="row pt-4">
        <div class="col-md-6">
          <span class="lingkaran"><i class="fas fa-coffee fa-5x"></i></span>
          <h3 class="mt-3">Dingin</h3>
          <p>Dapat dinikmati saat dingin </p>
        </div>
        <div class="col-md-5">
          <span class="lingkaran"><i class="fas fa-mug-hot fa-5x"></i></span>
          <h3 class="mt-3">Panas</h3>
          <p>Dapat dinikmati saat panas </p>
        </div>
      </div>
    </div>
  </div>
  <!-- akhir definisi -->
  <!-- sejarah -->
  <div class="container-fluid pt-5 pb-5 bg-light">
    <div class="container text-center">
      <h2 class="display-3" id="sejarah">Sejarah</h2>
      <p>Sejarah kopi di dunia bermula di Ethiopia sejak abad ke-9. Pada saat itu, kopi masih dikonsumsi sebagai ceri.
        Para pedagang dari Arab kemudian memopulerkan minuman hasil seduhan biji buah ceri tersebut.

        Pada pertengahan abad ke-15, kopi pun mulai dikomersilkan ke penjuru dunia melalui pelabuhan Mocha di Yaman.
        Bagaimanakah kisah perjalanan kopi sehingga menjadi minuman populer di dunia? Dengan membaca artikel sejarah
        kopi di kopipedia, Anda akan terbantu dalam merunut asal usul minuman legendaris ini.<br><a
          href="sejarah.php">Baca Selengkapnya..</a></p>
    </div>
  </div>
  <!-- akhir sejarah -->
  <!-- carousel -->
  <div class="container-fluid carousel-contain py-5">
    <div class="container">
      <h2 class="text-center">Mini Galeri</h2>
      <div id="carouselExampleDark" class="carousel carousel-light['mn 'we slide col-lg-8 offset-lg-2" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner atas">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="img/kopi1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Kopi Gayo</h5>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="img/kopi5.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Kopi Lanang</h5>
      </div>
    </div>
    <div class="carousel-item ">
      <img src="img/test.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Coming Soon</h5>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    </div>

  </div>
  <!-- akhir acarousel -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
  </script>
</body>

</html>