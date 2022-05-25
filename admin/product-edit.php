<?php
  require_once("../database/dbContext.php");
  require_once("../database/utility.php");

    //get brand list
    $brandSQL = "SELECT * FROM brands";
    $brandList = executeResult($brandSQL);
  
    //get categories list
    $select = "SELECT * FROM categories";
    $cateList = executeResult($select);

    //get product
    if(!empty($_GET)) {
        $id = getGet('id');
        $productSQL = "SELECT * FROM products WHERE id = ".$id;
        $productResult = executeResult($productSQL, true);
    } else {
        header("Location: products.php");
    }

    //edit product
    if(!empty($_POST)) {
        $title = getPost('title');
        $price = getPost('price');
        $voucher = getPost('voucher');
        $brand_id = getPost('brand_id');
        $cate_id = getPost('cate_id');
        $storage = getPost('storage');
        $camera = getPost('camera');
        $chipset = getPost('chipset');
        $battery = getPost('battery');
        $resolution = getPost('resolution');
        $image = getPost('image');
        $href_param = getHref($title);

        $editSQL = "UPDATE products SET title = '$title', price = '$price', voucher = '$voucher', brand_id = '$brand_id', cate_id = '$cate_id', storage = '$storage', camera = '$camera', chip = '$chipset', battery = '$battery', resolution = '$resolution', image = '$image', href_param = '$href_param' WHERE id = ".$id;
        execute($editSQL);

        header("Location: products.php");
    }
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

    <!-- Modal Box -->
    <div>
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
                                    <input value="<?=$productResult['title']?>" name="title" type="text"
                                        class="form-control">
                                </div>
                                <div class="form-group mb-2">
                                    <label>Price</label>
                                    <input value="<?=$productResult['price']?>" name="price" type="number"
                                        class="form-control" min="0">
                                </div>
                                <div class="form-group mb-2">
                                    <label>Voucher</label>
                                    <input value="<?=$productResult['voucher']?>" name="voucher" type="text"
                                        class="form-control">
                                </div>
                                <div class="form-group mb-2">
                                    <label>Brand</label>
                                    <select name="brand_id" id="" class="form-select">
                                        <option>Click to select Brand</option>
                                        <?php
                                          if(count($brandList) > 0) {
                                              foreach($brandList as $item) {
                                                if($productResult['brand_id'] == $item['id']) {
                                                    echo '<option value="'. $item['id'] .'" selected>'. $item['name'] .'</option>';
                                                } else {
                                                    echo '<option value="'. $item['id'] .'">'. $item['name'] .'</option>';
                                                }
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
                                                  if($productResult['cate_id'] == $item['id']) {
                                                    echo '<option value="'. $item['id'] .'" selected>'. $item['name'] .'</option>';
                                                } else {
                                                    echo '<option value="'. $item['id'] .'">'. $item['name'] .'</option>';
                                                }
                                              }
                                          }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group mb-2">
                                    <label>Storage</label>
                                    <input value="<?=$productResult['storage']?>" name="storage" type="number"
                                        class="form-control" min="0">
                                </div>
                                <div class="form-group mb-2">
                                    <label>Camera</label>
                                    <input value="<?=$productResult['camera']?>" name="camera" type="text"
                                        class="form-control">
                                </div>
                                <div class="form-group mb-2">
                                    <label>Chipset</label>
                                    <input value="<?=$productResult['chip']?>" name="chipset" type="text"
                                        class="form-control">
                                </div>
                                <div class="form-group mb-2">
                                    <label>Battery</label>
                                    <input value="<?=$productResult['battery']?>" name="battery" type="number"
                                        class="form-control" min="0">
                                </div>
                                <div class="form-group mb-2">
                                    <label>Resolution</label>
                                    <input value="<?=$productResult['resolution']?>" name="resolution" type="text"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-8">
                                    <div class="form-group mb-2">
                                        <label>Image</label>
                                        <textarea name="image" type="text"
                                            class="form-control"><?=$productResult['image']?></textarea>
                                    </div>
                                    <div class="form-group mb-2">
                                        <label>Description</label>
                                        <textarea name="desc" type="text" class="form-control"
                                            style="height: 100px"></textarea>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <label>Preview:</label>
                                    <img class="previewImg" src="<?=$productResult['image']?>"
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
$("textarea[name='image']").on('input', function() {
    $("img.previewImg").attr("src", $(this).val())
})
</script>
<!-- Footer -->
<?php
  include_once("./layouts/footer.php");
?>