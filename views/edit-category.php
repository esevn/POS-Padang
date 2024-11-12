<?php 
require_once __DIR__ . '/../Model/Model.php';
require_once __DIR__ . '/../Model/Category.php';

if(!isset($_SESSION["full_name"])){
  header("Location: login.php");
  exit;
}

$id = $_GET['id'];
if(!isset($id)){
  header("Location: index-category.php");
  exit;
}
$categories = new Category();
$detail_category = $categories->find($id)[0];

if(isset($_POST['submit'])) {
$category = [
  "category_name" => $_POST["category_name"]
];
if(strlen($_POST["category_name"]) > 230){
  echo "<script>alert('Kategori harus dibawah 230 karakter woi🤬'); window.location.href = 'edit-category.php';
  </script>";
  die;
}
$result = $categories->update($id, $category);

if($result !== false){
  echo "<script>alert('Kategori baru diedit dengan nama {$result['category_name']}'); window.location.href = 'index-category.php';
  </script>";
}else{
  "<script>alert('Kategori gagal diedit'); window.location.href = 'edit-category.php';
  </script>";
}
}
?>


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
                        <h1>Edit Kategorimu</h1>
                    </div>

        <div class="row">
            <div class="col-12 col-md-6 col-lg-6">
            <div class="col-12 col-md-6 col-lg-12 p-2 d-flex justify-content-center align-items-center">
                <img src="../assets/img/ilustratiton/skate.png" alt="" style="width: 300px;      ">
              </div>

              </div>
              <div class="col-12 col-md-6 col-lg-6 mx-auto">
                <div class="card">
                  <div class="card-header">
                    <h4>Edit Kategori</h4>
                  </div>
                  <div class="card-body w-full">
                    <form action="" method="post">
                    <div class="form-group">
                      <label for="category_name">Nama Kategori</label>
                      <input type="text" name="category_name" id="category_name" class="form-control" value="<?= $detail_category['category_name'] ?>">
                    </div>
                    <div class="d-flex justify-content-end">
                    <button type="submit" name="submit" class="btn btn-primary">Edit</button>
                    </div>
                    </form>
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

    <!-- Page Specific JS File -->

    <!-- Template JS File -->
    <script src="../assets/js/scripts.js"></script>
    <script src="../assets/js/custom.js"></script>
</body>

</html>