<?php
    $namaper = $_POST['name'];
    $jenisper = $_POST['jp'];
    $nik = $_POST['nik'];
    $sarana = $_POST['sarana'];
    $jumlah = $_POST['jumlah'];
?>

<!doctype html>
<html lang="en">
  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">

    <title>Tampilan Form Identitas</title>

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <link href="cheatsheet.css" rel="stylesheet">

  </head>
  <body>

  <header class="bd-header bg-dark py-3 d-flex align-items-stretch border-bottom border-lg">
  <div class="container-fluid d-flex align-items-center">
    <h1 class="d-flex align-items-center fs-4 text-white mb-0">
      <img src="gambar/nelayan.png" width="50" height="30" class="me-3" alt="">
      Form Identitas
    </h1>
    <a href="https://www.kkp.go.id/" class="ms-auto link-light" hreflang="ar">KKP</a>
  </div>
</header>

  <div id="form2">
        <div id="form" class="bd-example">
        <table class="table table-dark table-border">

          <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nama Perusahaan Perikanan</th>
            <th scope="col">Jenis Perusahaan</th>
            <th scope="col">NIK</th>
            <th scope="col">Sarana Perikanan</th>
            <th scope="col">Jumlah Alat Tangkap Utama</th>
          </tr>
          </thead>

          <tbody>
          <tr>
            <th scope="row">1</th>
            <td><?php echo $namaper ?></td>
            <td ><?php echo $jenisper ?></td>
            <td><?php echo $nik ?></td>
            <td><?php echo $sarana ?></td>
            <td><?php echo $jumlah ?></td>
          </tr>
          

          </tbody>

        </table>
        </div>


        <section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light text-light bold">Data Identitas Anda Telah Tersimpan</h1>
        <h4 class="lead text-light bold">Apakah anda ingin kembali ke menu utama?</h4>
        <p>
          <a href="index.php" class="btn btn-primary my-2">Menu</a>
          <a href="#" onclick="hapusFORM()" class="btn btn-secondary my-2">Hapus Form</a>
        </p>
      </div>
    </div>
  </section>

  <Script> 
function hapusFORM(){
    let hapusFORM = document.getElementById('form');
    hapusFORM.remove('form')
}
</Script>
 


  <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 border-top bg-dark">
    <p class="col-md-4 mb-0 text-muted">&copy; Muhammad Ukasah (2007253)</p>

    <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
      <img src="gambar/nelayan.png" width="40" height="32"></a>
    </a>

    <ul class="nav col-md-4 justify-content-end">
      <li class="nav-item"><a href="index.php" class="nav-link px-2 text-muted">Kembali</a></li>
      <li class="nav-item"><a href="https://www.kkp.go.id/" class="nav-link px-2 text-muted">KKP</a></li>
      
    </ul>
  </footer>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="/docs/5.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="cheatsheet.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>