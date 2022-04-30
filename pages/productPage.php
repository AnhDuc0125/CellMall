<?php
    require_once("../database/dbContext.php");
    require_once("../database/utility.php");

  if(!empty($_GET)) {
      $key = getGet('key');
      $select = "select * from products where href_param = '$key'";
      $product = executeResult($select, true);
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/master.css" />
    <link rel="stylesheet" href="../assets/css/navbar.css" />
    <link rel="stylesheet" href="../assets/css/footer.css" />
    <link rel="stylesheet" href="../assets/css/productPage.css" />
</head>

<body>
    <!-- Navbar and Component -->
    <?php
      include_once('../layout/navbar.php');
    ?>

    <!-- navbar -->
    <div id="main">
        <div class="product">
            <h1 class="product__title"><?=$product['title']?></h1>
            <div class="product__detail">
                <div class="detail__left">
                    <img src="<?=$product['image']?>" alt="" class="detail__image" />
                </div>
                <div class="product__right">
                    <div class="product__price">
                        <h1 style="display: inline-block"><?=number_format($product['price'])?> <u>đ</u></h1>
                        | Giá đã bao gồm VAT
                    </div>

                    <h3 class="product__oldPrice">
                        Giá cũ: <span><?=number_format($product['old_price'])?> <u>đ</u></span>
                    </h3>
                    <div class="product__desc">
                        <?=$product['description']?>
                    </div>
                    <button class="product__addToCart_btn">ADD TO CART</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <?php
      include_once('../layout/footer.php');
    ?>
</body>

</html>