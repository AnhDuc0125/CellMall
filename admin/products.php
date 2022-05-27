<?php
  require_once("../database/dbContext.php");
  require_once("../database/utility.php");

  if(!isset($_SESSION['adminAccount'])) {
    header("Location: login.php");
  }

    //Add product
    if(!empty($_POST)) {
        $title = getPost('title');
        $price = getPost('price');
        $discount = getPost('discount');
        $brand_id = getPost('brand_id');
        $cate_id = getPost('cate_id');
        $storage = getPost('storage');
        $camera = getPost('camera');
        $chipset = getPost('chipset');
        $battery = getPost('battery');
        $resolution = getPost('resolution');
        $image = getPost('image');
        $href_param = getHref($title);

        $addSQL = "INSERT INTO products (title, price, discount, brand_id, cate_id, storage, camera, chip, battery, resolution, image, href_param) values ('$title', '$price', '$discount', '$brand_id', '$cate_id', '$storage', '$camera', '$chipset', '$battery', '$resolution', '$image', '$href_param')";
        execute($addSQL);

        header("Refresh: 0");
    }

  if(!empty($_GET)) {
    if(isset($_GET['perPage'])) {
        $perPage = getGet('perPage');
    } else {
        $perPage = 5;
    }

    if(isset($_GET['page'])) {
        $page = getGet('page');
    } else {
        $page = 1;
    }
  } else {
      $page = 1;
      $perPage = 5;
  }

  //get number of products
  $countSQL = "SELECT COUNT(*) FROM products";
  $countResult = executeResult($countSQL, true);

  //get product list
  $select = "SELECT products.*, brands.name AS brand_name, categories.name AS cate_name FROM products, brands, categories WHERE products.cate_id = categories.id AND products.brand_id = brands.id AND products.id >= ". $page * 5 - 4 ." ORDER BY products.id ASC LIMIT 5";
  $productList = executeResult($select);
  
  //get brand list
  $brandSQL = "SELECT * FROM brands";
  $brandList = executeResult($brandSQL);

  //get categories list
  $select = "SELECT * FROM categories";
  $cateList = executeResult($select);
?>

<!-- Header -->
<?php
  include_once("./layouts/header.php");
?>

<body>
    <!-- Aside-start -->
    <?php
      include_once("./layouts/aside_start.php");
    ?>

    <!-- Title -->
    <div class="container">
        <div class="row my-2">
            <div class="col-6">
                <h1 class="my-0">Product Manager (<?=$countResult['COUNT(*)']?>)</h1>
            </div>
            <div class="col-4" style="display: flex; align-items: center; justify-content: space-between"><a
                    href="?page=1" class="btn btn-warning" style="display: flex; align-items: center;">
                    <i class='bx bxs-chevrons-left'></i>
                </a>
                <a href="?page=<?=($page - 1)?>" class="btn btn-warning" style="display: flex; align-items: center;">
                    <i class='bx bxs-chevron-left'></i>
                </a>
                <input type="number" class="form-control" style="width: 60px" readonly value="<?=$page?>">
                <div>of <?=ceil($countResult['COUNT(*)'] / 5)?></div>
                <a href="?page=<?=($page + 1)?>" class="btn btn-warning" style="display: flex; align-items: center;">
                    <i class='bx bxs-chevron-right'></i>
                </a>
                <a href="?page=<?=ceil($countResult['COUNT(*)'] / 5)?>" class="btn btn-warning"
                    style="display: flex; align-items: center;">
                    <i class='bx bxs-chevrons-right'></i>
                </a>
            </div>
            <div class="col-2 my-auto">
                <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addModal">Add Product</button>
            </div>
        </div>
    </div>

    <!-- Table -->
    <table class="table table-striped table-bordered mx-auto" style="width: 85%">
        <tr class="table-dark">
            <th>#</th>
            <th>Title</th>
            <th>Image</th>
            <th>Price (VND)</th>
            <th>Brand</th>
            <th>Category</th>
            <th colspan="2">Action</th>
        </tr>
        <?php
          if(count($productList) > 0) {
              $index = $page * 5 - 4;
              foreach($productList as $item) {
                echo    '<tr>
                            <td>'. $index++ .'</th>
                            <td>'. $item['title'] .'</th>
                            <td><img src="'. $item['image'] .'" style="width: 75px"></th>
                            <td>'. number_format($item['price']) .'</th>
                            <td>'. $item['brand_name'] .'</th>
                            <td>'. $item['cate_name'] .'</th>
                            <td><a href="./product-edit.php?id='. $item['id'] .'" class="btn btn-warning"><i class="bx bxs-pencil" ></i></a></th>
                            <td><button class="btn btn-danger" onclick="remove('. $item['id'] .')"><i class="bx bx-trash" ></i></button></th>
                        </tr>';
              }
          }
        ?>
    </table>

    <!-- Modal Box -->
    <div class="modal fade" id="addModal">
        <div class="modal-dialog" style="max-width: 750px">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Product</h5>
                    <button class="btn btn-secondary" data-bs-dismiss="modal">X</button>
                </div>
                <div class="modal-body">
                    <form method="post">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group mb-2">
                                    <label>Title</label>
                                    <input name="title" type="text" class="form-control">
                                </div>
                                <div class="form-group mb-2">
                                    <label>Price</label>
                                    <input name="price" type="number" class="form-control" min="0">
                                </div>
                                <div class="form-group mb-2">
                                    <label>Voucher</label>
                                    <input name="voucher" type="text" class="form-control">
                                </div>
                                <div class="form-group mb-2">
                                    <label>Brand</label>
                                    <select name="brand_id" id="" class="form-select">
                                        <option>Click to select Brand</option>
                                        <?php
                                          if(count($brandList) > 0) {
                                              foreach($brandList as $item) {
                                                  echo '<option value="'. $item['id'] .'">'. $item['name'] .'</option>';
                                              }
                                          }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group mb-2">
                                    <label>Category</label>
                                    <select name="cate_id" id="" class="form-select">
                                        <option>Click to select Category</option>
                                        <?php
                                          if(count($cateList) > 0) {
                                              foreach($cateList as $item) {
                                                  echo '<option value="'. $item['id'] .'">'. $item['name'] .'</option>';
                                              }
                                          }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group mb-2">
                                    <label>Storage</label>
                                    <input name="storage" type="number" class="form-control" min="0">
                                </div>
                                <div class="form-group mb-2">
                                    <label>Camera</label>
                                    <input name="camera" type="text" class="form-control">
                                </div>
                                <div class="form-group mb-2">
                                    <label>Chipset</label>
                                    <input name="chipset" type="text" class="form-control">
                                </div>
                                <div class="form-group mb-2">
                                    <label>Battery</label>
                                    <input name="battery" type="number" class="form-control" min="0">
                                </div>
                                <div class="form-group mb-2">
                                    <label>Resolution</label>
                                    <input name="resolution" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-8">
                                    <div class="form-group mb-2">
                                        <label>Image</label>
                                        <textarea name="image" type="text" class="form-control"></textarea>
                                    </div>
                                    <div class="form-group mb-2">
                                        <label>Description</label>
                                        <textarea name="desc" type="text" class="form-control"
                                            style="height: 100px"></textarea>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <label>Preview:</label>
                                    <img class="previewImg" src="../assets/photos/emptyPicture.jpg"
                                        onerror="this.src='../assets/photos/emptyPicture.jpg'"
                                        style="width: 100%; max-height: 150px; object-fit: cover">
                                    <button class="btn btn-success" style="width: 100%">Add</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Aside-end -->
    <?php
      include_once("./layouts/aside_end.php");
    ?>
</body>
<script>
function remove(id) {
    actionConfirm = confirm("Are you sure to remove this product?");

    if (actionConfirm) {
        $.post("../api/db_api.php", {
            'id': id,
            'method': 'remove_product',
            function(data) {
                location.reload();
            }
        })
    }
}

$("textarea[name='image']").on('input', function() {
    $("img.previewImg").attr("src", $(this).val())
})
</script>

<!-- Footer -->
<?php
  include_once("./layouts/footer.php");
?>