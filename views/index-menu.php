<?php

require_once __DIR__ . "/../Model/model.php";
require_once __DIR__ . "/../Model/Item.php";

if(!isset($_SESSION["full_name"])){
  header("Location: login.php");
  exit;
}

$menus = new Item();

$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$limit = 2;
$start = ($page - 1) * $limit;
$lenght = count($menus->all());
$totalPages = ceil($lenght / $limit);

$items = $menus->all2($start, $limit);
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
      <?php include('../components/layout/navbar.php'); ?>

      <?php include('../components/layout/sidebar.php'); ?>

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Home Menu</h1>
          </div>

          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Advanced Table</h4>
                    <div class="card-header-form">
                      <form>
                        <div class="input-group">
                          <input type="text" class="form-control" placeholder="Search" id="search">
                          <div class="input-group-btn">
                            <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div id="content" class="table-responsive">
                      <table class="table table-striped">
                        <tr>
                          <th>
                            <div class="custom-checkbox custom-control">
                              <input type="checkbox" data-checkboxes="mygroup" data-checkbox-role="dad" class="custom-control-input" id="checkbox-all">
                              <label for="checkbox-all" class="custom-control-label">&nbsp;</label>
                            </div>
                          </th>
                          <th>Name</th>
                          <th>Attachment</th>
                          <th>Category name</th>
                          <th>Price</th>
                          <th>Time</th>
                          <th>Action</th>
                        </tr>
                        <?php foreach ($menus->all2($start, $limit) as $menu) : ?>
                          <tr >
                            <td class="">
                              <div class="custom-checkbox custom-control">
                                <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-1">
                                <label for="checkbox-1" class="custom-control-label">&nbsp;</label>
                              </div>
                            </td>
                            <td><?= $menu["name"] ?></td>
                            <td>
                              <img alt="image" src="../public/img/items/<?= $menu["attachment"] ?>">
                            </td>
                            <td><?= $menu["category_name"] ?></td>
                            <td>Rp. <?= $menu["price"] ?></td>
                            <td><?= $menu["created_at"] ?></td>
                            <td class="justify-content-end">
                              <a href="detail-menu.php?id=<?= $menu["id"] ?>" class="btn btn-primary mr-1"><i class="far fa-eye"></i></a>
                              <a href="edit-menu.php?id=<?= $menu["id"] ?>" class="btn btn-success mr-1"> <i class="far fa-edit"></i></a>
                              <a href="delete-menu.php?id=<?= $menu["id"] ?>" class="btn btn-danger mr-1"><i class="far fa-trash-alt"></i></a>
                            </td>
                          </tr>
                          <?php endforeach; ?>
                      </table>
                      <div class="card-footer text-right">
                      <div class="d-inline-block">
                        <ul class="pagination mb-0">
                          <li class="page-item <?= $page <= 1 ? 'disabled' : '' ?>">
                            <a class="page-link" href="?page=<?= $page -1 ?>" ><i class="fas fa-chevron-left"></i></a>
                          </li>

                          <?php
                          
                          for ($i = 1; $i <= $totalPages; $i++) : ?> 
                          <li class="page-item <?= $page == $i ? 'active' : ''?>">
                            <a class="page-link" href="?page=<?= $i ?>"> <?= $i ?> <span class="sr-only">(current)</span></a>
                          </li>
                          
                          <?php endfor?>

                          <li class="page-item  <?= $page >= $totalPages ? 'disabled' : '' ?>">
                            <a class="page-link" href="?page=<?= $page + 1 ?>"><i class="fas fa-chevron-right"></i></a>
                          </li>
                        </ul>
                      </div>
                    </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
      </section>
    </div>
    <?php include('../components/layout/footer.php'); ?>
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

  <script>
      $(document).ready(function() {
        $("#search").on("keyup", function() {
          $("#content").load("../assets/search/menu.php?keyword=" + $(this).val());
        });
      });
    </script>
</body>

</html>