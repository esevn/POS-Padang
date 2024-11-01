<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Blank Page &mdash; Stisla</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="../assets/modules/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/modules/fontawesome/css/all.min.css">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="../assets/modules/bootstrap-daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="../assets/modules/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css">
    <link rel="stylesheet" href="../assets/modules/select2/dist/css/select2.min.css">
    <link rel="stylesheet" href="../assets/modules/jquery-selectric/selectric.css">

    <!-- Template CSS -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/components.css">
    <!-- Start GA -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-94034622-3');
    </script>
    <!-- /END GA -->
</head>

<body>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>
            <!-- navbar -->
            <?= include('../components/layout/navbar.php'); ?>
            <!-- sidebar -->
            <?= include('../components/layout/sidebar.php'); ?>

            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    <div class="section-header">
                        <h1>Blank Page</h1>
                    </div>

        <div class="row">
            <div class="col-12 col-md-6 col-lg-6 p-2 d-flex justify-content-center align-items-center">
                <img src="../assets/img/ilustratiton/skate.png" alt="" style="width: 300px;      ">
              </div>
              <div class="col-12 col-md-6 col-lg-6 mx-auto">
                <div class="card">
                  <div class="card-header">
                    <h4>Ganti Password</h4>
                  </div>
                  <div class="card-body">
                    <div class="form-group">
                      <label>Masukkan sandi</label>
                      <input type="text" class="form-control">
                    </div>
                    <div class="menu-header">
                        <p class="text-primary">Pilih sandi yang kuat dan jangan gunakan lagi untuk akun lain.</p>
                    </div>
                    <div class="form-group">
                        <label>Sandi baru</label>
                        <input type="email" class="form-control">
                    </div>
                    <div class="menu-header">
                        <p class="font-weight-bold">Kekuatan sandi:</p>
                        <p class="text-primary  ">
                        Gunakan setidaknya 8 karakter.</p>
                    </div>
                    <div class="form-group">
                      <label>Konfirmasi sandi baru</label>
                      <input type="email" class="form-control">
                    </div>
                    <div class="d-flex justify-content-end">
                    <button class="btn btn-primary">Tambahkan</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
                </section>
            </div>
            <!-- footer -->
            <?= include('../components/layout/footer.php'); ?>
        </div>
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
  <script src="../assets/modules/cleave-js/dist/cleave.min.js"></script>
  <script src="../assets/modules/cleave-js/dist/addons/cleave-phone.us.js"></script>
  <script src="../assets/modules/jquery-pwstrength/jquery.pwstrength.min.js"></script>
  <script src="../assets/modules/bootstrap-daterangepicker/daterangepicker.js"></script>
  <script src="../assets/modules/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
  <script src="../assets/modules/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
  <script src="../assets/modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
  <script src="../assets/modules/select2/dist/js/select2.full.min.js"></script>
  <script src="../assets/modules/jquery-selectric/jquery.selectric.min.js"></script>

  <!-- Page Specific JS File -->
  <script src="../assets/js/page/forms-advanced-forms.js"></script>
  
  <!-- Template JS File -->
  <script src="../assets/js/scripts.js"></script>
  <script src="../assets/js/custom.js"></script>
</body>

</html>