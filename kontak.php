<html>
    <head>
        <title>testo</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
    <nav id="main-navbar" class="navbar navbar-expand-lg navbar-dark bg-dark shadow-lg fixed-top">
     <div class="container-fluid satu">
      <a class="navbar-brand " ><img src="https://images.unsplash.com/photo-1634034379073-f689b460a3fc?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1780&q=80" alt="" width="35" height="29" class="d-inline-block align-text-top">Baleeee</a>
       <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
       </button>
     <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="home.php" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Home
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="home.php">Home</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item " href="sejarah.php">Sejarah</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="galeri.php">Gallery</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="kontak.php">Contact us</a>
        </li>
      </ul>
     </div>
     </div>
    </nav>  
    <div class="container-fluid kontak">
     <div class="container atas">
      <h1>Contact Us</h1>
      <p>Jika butuh bantuan, segera hubungi kami melalui form dibawah ini.</p>
     </div>
     <div class="container form">
      <div class="row email">
       <div class="col-sm-8 text">
          <form method="GET">
              username <br>
              <input type="text" name="username" id="username" placeholder="masukkan email">
          </form>
       </div>
      </div>
      <div class="row nama">
       <div class="col-sm-4 text">
          <form method="GET">
              Nama Depan <br>
              <input type="text" name="username" id="username" placeholder="masukkan nama">
          </form>
       </div>
       <div class="col-sm-4 text">
          <form method="GET">
              Nama Belakang <br>
              <input type="text" name="username" id="username" placeholder="masukkan nama">
          </form>
       </div>
      </div>
      <div class="row pesan">
       <div class="col-sm-8 text">
          <form method="GET">
              Pesan <br>
              <textarea name="pesan" id="pesan" cols="30" row="10"></textarea>
          </form>
       </div>
      </div>
      <input type="checkbox" name="setuju" value="setuju"> Saya setuju dengan ketentuan dan kondisi<br>
      <button onclick="alert('terkirim (masih belum tau cara masukin kondisinya kang)')" type="button" class="btn btn-primary">Send</button>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>