<?php
    require_once("../database/dbContext.php");
    require_once("../database/utility.php");

  if(!empty($_GET)) {
      $key = getGet('key');
      $select = "select * from products where href_param = '$key'";
      $product = executeResult($select, true);

      $otherBrandProductSQL = "SELECT * FROM products where brand_id != '". $product['brand_id'] ."' LIMIT 2";
      $otherBrandProduct = executeResult($otherBrandProductSQL);

      $sameBrandProductSQL = "SELECT * FROM products where brand_id = '". $product['brand_id'] ."' AND title NOT LIKE '". $product['title'] ."' LIMIT 5";
      $sameBrandProduct = executeResult($sameBrandProductSQL);
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?=$product['title']?></title>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="../assets/css/master.css" />
    <link rel="stylesheet" href="../assets/css/layouts/navbar.css" />
    <link rel="stylesheet" href="../assets/css/layouts/footer.css" />
    <link rel="stylesheet" href="../assets/css/pages/productPage.css" />
</head>

<body>
    <!-- Navbar and Component -->
    <?php
      include_once('../layout/navbar.php');
    ?>

    <!-- navbar -->
    <div id="main">
        <div class="product">
            <h2 class="product__title"><?=$product['title']?> | Chính hãng VN/A</h2>
            <div class="product__detail">
                <div class="detail__left">
                    <img src="<?=$product['image']?>" alt="" class="detail__image" />
                </div>
                <div class="product__middle">
                    <div class="product__price">
                        <h2 style="display: inline-block"><?=number_format($product['price'])?> <u>đ</u></h2>
                        | Giá đã bao gồm VAT
                    </div>

                    <h3 class="product__oldPrice">
                        Giá cũ: <span><?=number_format($product['old_price'])?> <u>đ</u></span>
                    </h3>
                    <div class="product__desc">
                        <?=$product['description']?>
                    </div>
                    <button class="product__addToCart_btn">
                        ADD TO CART
                    </button>
                </div>
                <div class="product__right">
                    <table>
                        <caption>
                            <p>Product's detail</p>
                        </caption>
                        <tr>
                            <td class="icon__detail">
                                <ion-icon name="phone-portrait-outline"></ion-icon>
                            </td>
                            <td>New, full accessories from the manufacturer.</td>
                        </tr>
                        <tr>
                            <td class="icon__detail">
                                <ion-icon name="cube-outline"></ion-icon>
                            </td>
                            <td>USB-C to Lightning cable, guide book.</td>
                        </tr>
                        <tr>
                            <td class="icon__detail">
                                <ion-icon name="hand-left-outline"></ion-icon>
                            </td>
                            <td>1 EXCHANGE 1 in 30 days if there is a manufacturer hardware defect.</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="compare">
            <h1>Compare Products</h1>
            <table class="compare__table">
                <tr class="heading">
                    <th>Products</th>
                    <th>Storage</th>
                    <th style="width: 300px">Camera</th>
                    <th style="width: 150px">Chipset</th>
                    <th>Battery</th>
                    <th>Resolution</th>
                </tr>
                <?php
                    echo '<tr>
                            <th>'. $product['title'] .'</th>
                            <td>'. $product['storage'] .' GB</td>
                            <td>'. $product['camera'] .'</td>
                            <td>'. $product['chip'] .'</td>
                            <td>'. $product['battery'] .' mAh</td>
                            <td>'. $product['resolution'] .'</td>
                        </tr>';
                  foreach($sameBrandProduct as $item) {
                    echo '<tr>
                            <th>'. $item['title'] .'</th>
                            <td>'. $item['storage'] .' GB</td>
                            <td>'. $item['camera'] .'</td>
                            <td>'. $item['chip'] .'</td>
                            <td>'. $item['battery'] .' mAh</td>
                            <td>'. $item['resolution'] .'</td>
                        </tr>';
                  }

                  foreach($otherBrandProduct as $item) {
                    echo '<tr>
                            <th>'. $item['title'] .'</th>
                            <td>'. $item['storage'] .' GB</td>
                            <td>'. $item['camera'] .'</td>
                            <td>'. $item['chip'] .'</td>
                            <td>'. $item['battery'] .' mAh</td>
                            <td>'. $item['resolution'] .'</td>
                        </tr>';
                  }
                ?>
            </table>
        </div>
    </div>

    <!-- Footer -->
    <?php
      include_once('../layout/footer.php');
    ?>
</body>

</html>