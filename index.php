<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"></script>

    <title>Form Login</title>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">

            <form action="proses_loginSiswa.php" class="sign-in-form" method="post">
            <h2 class="title">Form Login Siswa</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" class="form-control form-control-user" name="nisn" placeholder="NISN" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="text" class="form-control form-control-user" name="nis" placeholder="NIS" />
            </div>
            <input type="submit" value="Login" class="btn solid" />
            
          </form>
          <form action="proses-login.php" class="sign-up-form" method="post">
            <h2 class="title">Form Login Admin/Petugas</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" class="form-control form-control-user" name="username" placeholder="Username" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" class="form-control form-control-user" name="password" placeholder="Password" />
            </div>
            <input type="submit" class="btn" value="Login" />
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h1>Aplikasi Pembayaran SPP Sekolah</h1>
            <p></p>
            <button class="btn transparent admin" id="sign-up-btn">
              Login sebagai admin atau petugas
            </button> 
          </div>
          <img src="img/log.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h1>Aplikasi Pembayaran SPP Sekolah</h1>
            <p></p>
            <button class="btn transparent siswa" id="sign-in-btn">
              Login sebagai siswa
            </button>
          </div>
          <img src="img/register.svg" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="assets/js/app.js"></script>
    <!-- Bootstrap core JavaScript-->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="assets/js/sb-admin-2.min.js"></script>

  </body>
</html>






