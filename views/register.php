<?php
require_once __DIR__ . "/../Model/model.php";
require_once __DIR__ . "/../Model/User.php";

if(isset($_SESSION["full_name"])){
  header("Location: index.php");
  exit;
}

$user = new User();

if(isset($_POST["submit"])) {
    $datas = [
      'post' => $_POST,
      'files' => $_FILES
    ];

    $result = $user->register($datas);
    if(gettype($result) == "string"){
        echo "<script>alert('{$result}'); window.location.href = 'register.php';</script>";
    }else {
        echo "<script>alert('Berhasil Daftar'); window.location.href = 'login.php';</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Register &mdash; Stisla</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="../assets/modules/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/modules/fontawesome/css/all.min.css">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="../assets/modules/jquery-selectric/selectric.css">

  <!-- Template CSS -->
  <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="stylesheet" href="../assets/css/components.css">
<!-- Start GA -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-94034622-3');
</script>
<!-- /END GA --></head>

<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
      <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="card card-primary">
              <div class="card-header"><h4>Register</h4></div>

              <div class="card-body">
                <form method="POST" action="" enctype="multipart/form-data" class="needs-validation" novalidate="">
                  <div class="form-group">
                    <label for="full_name">Nama Lengkap</label>
                    <input id="full_name" type="full_name" class="form-control" name="full_name" tabindex="1" required autofocus>
                    <div class="invalid-feedback">
                      Please fill in your name
                    </div>
                  </div>
                  <div class="form-group">
                      <label for="gnder">Pilih Kategori</label>
                      <select name="gender" id="gnder" class="form-control selectric">                       
                        <option value="l">Laki-laki</option>
                        <option value="p">Perempuan</option>
                        </select>
                    </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="email" class="form-control" name="email" tabindex="1" required autofocus>
                    <div class="invalid-feedback">
                      Please fill in your email
                    </div>
                  </div>

                  <div class="form-group d-flex flex-column">
                        <label for="avatar">Gambar</label>
                          <div class="custom-file">
                            <input type="file" name="avatar" class="custom-file-input" id="avatar">
                            <label class="custom-file-label">Choose File</label>
                          </div>
                          <div class="form-text text-muted">The image must have a maximum size of 5MB`
                          </div>                 
                      </div>

                  <div class="form-group">
                    <div class="d-block">
                    	<label for="password" class="control-label">Password</label>
                    </div>
                    <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
                    <div class="invalid-feedback">
                      please fill in your password
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="d-block">
                    	<label for="con-firm-password" class="control-label">Konfirmasi Password</label>
                    </div>
                    <input id="confirm-password" type="password" class="form-control" name="confirm-password" tabindex="2" required>
                    <div class="invalid-feedback">
                      please fill in your confirm-password
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember-me">
                      <label class="custom-control-label" for="remember-me">Remember Me</label>
                    </div>
                  </div>

                  <div class="form-group">
                    <button type="submit" name="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                      Login
                    </button>
                  </div>
                </form>
              </div>
            </div>
            <div class="mt-5 text-muted text-center">
              Don't have an account? <a href="auth-register.html">Create One</a>
            </div>
            <div class="simple-footer">
            Copyright &copy; 2024 <div class="bullet"></div> Design By <a href="#">Muhammad Syafiq</a>            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- General JS Scripts -->
  <script src="../assets/modules/jquery.min.js"></script>
  <script src="../assets/modules/popper.js"></script>
  <script src="../assets/modules/tooltip.js"></script>
  <script src="../assets/modules/bootstrap/js/bootstrap.min.js"></script>
  <script src="../assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
  <script src="../assets/modules/moment.min.js"></script>
  <script src="../assets/js/stisla.js"></script>
  
  <!-- JS Libraies -->
  <script src="../assets/modules/jquery-pwstrength/jquery.pwstrength.min.js"></script>
  <script src="../assets/modules/jquery-selectric/jquery.selectric.min.js"></script>

  <!-- Page Specific JS File -->
  <script src="../assets/js/page/auth-register.js"></script>
  
  <!-- Template JS File -->
  <script src="../assets/js/scripts.js"></script>
  <script src="../assets/js/custom.js"></script>
</body>
</html>