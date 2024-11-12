<?php


require_once __DIR__ . '/../../DB/Connection.php';
require_once __DIR__ . '/../../Model/Model.php';
require_once __DIR__ . '/../../Model/Item.php';

$keyword = $_GET['keyword'];
$menus = new Item();
$menus = $menus->search($keyword);

?>


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
                          <th>Category_id</th>
                          <th>Price</th>
                          <th>Time</th>
                          <th>Action</th>
                        </tr>
                        <?php foreach ($menus as $menu) : ?>
                          <tr >
                            <td class="">
                              <div class="custom-checkbox custom-control">
                                <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-1">
                                <label for="checkbox-1" class="custom-control-label">&nbsp;</label>
                              </div>
                            </td>
                            <td><?= $menu["name"] ?></td>
                            <td>
                              <img alt="image" src="../public/img/items/<?= $menu["attachment"] ?>" class="rounded-circle" width="35" data-toggle="tooltip" title="Wildan Ahdian">
                            </td>
                            <td class=""><?= $menu["category_id"] ?></td>
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
                </div>