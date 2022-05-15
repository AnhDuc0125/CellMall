<?php
  session_start();

  require_once("../database/dbContext.php");

  $sql = "select products.*, categories.name from products, categories where categories.id = products.cate_id and categories.name = 'Best seller' LIMIT 10";
  $bestSeller = executeResult($sql);

  $sql = "select products.*, categories.name from products, categories where categories.id = products.cate_id and categories.name = 'On sale' LIMIT 10";
  $onSale = executeResult($sql);

  $sql = "select products.*, categories.name from products, categories where categories.id = products.cate_id and categories.name = 'Popular' LIMIT 10";
  $popular = executeResult($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CellMall | Home</title>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="../assets/css/master.css" />
    <link rel="stylesheet" href="../assets/css/layouts/navbar.css" />
    <link rel="stylesheet" href="../assets/css/layouts/footer.css" />
    <link rel="stylesheet" href="../assets/css/layouts/component.css" />
    <link rel="stylesheet" href="../assets/css/pages/homePage.css" />
    <link rel="stylesheet" href="../assets/css/layouts/productCard.css" />
    <link rel="stylesheet" href="../assets/css/layouts/brands.css" />
</head>

<body>
    <!-- Navbar and Component -->
    <?php
      include_once('../layout/navbar.php');
      include_once('../layout/component.php');
      include_once('../layout/brands.php');
    ?>

    <!-- Main -->
    <div id="main">

        <!-- Banner -->
        <div class="banner">
            <img src="../assets/photos/banner1.png">
        </div>

        <!-- Best Seller -->
        <div class="category bestSeller">
            <h1 class="category__title">Best Seller</h1>
            <div class="card__container">
                <?php
                  foreach($bestSeller as $item) {
                      echo '<a href="./productPage.php?key='. $item['href_param'] .'" class="card">
                                <div class="card__img">
                                    <img src="'. $item['image'] .'"
                                        alt="">
                                </div>
                                <div class="card__content">
                                    <h4 class="card__title">'. $item['title'] .'</h4>
                                    <h4 class="card__price">'. number_format($item['price']) .' đ</h4>
                                    <p class="card__oldPrice">'. number_format($item['old_price'] + 2000000) .' đ</p>
                                    <div class="card__voucher">Quà tặng lên đến 500.000 đ</div>
                                    <div class="card__star">'. rand('4', '5') .'<ion-icon name="star" class="star__icon"></ion-icon>
                                    </div>
                                </div>
                            </a>';
                  }
                ?>
            </div>
        </div>

        <!-- Banner -->
        <div class="banner">
            <img src="../assets/photos/banner2.jpg">
        </div>

        <!-- On sale -->
        <div class="category onSale">
            <h1 class="category__title">On Sale</h1>
            <div class="card__container">
                <?php
                  foreach($onSale as $item) {
                      echo '<a href="./productPage.php?key='. $item['href_param'] .'" class="card">
                                <div class="card__img">
                                    <img src="'. $item['image'] .'"
                                        alt="">
                                </div>
                                <div class="card__content">
                                    <h4 class="card__title">'. $item['title'] .'</h4>
                                    <h4 class="card__price">'. number_format($item['price']) .' đ</h4>
                                    <p class="card__oldPrice">'. number_format($item['old_price']) .' đ</p>
                                    <div class="card__voucher">Giảm giá lên đến '. $item['discount'] .' %</div>
                                    <div class="card__star">4.5 <ion-icon name="star" class="star__icon"></ion-icon>
                                    </div>
                                </div>
                            </a>';
                  }
                ?>
            </div>
        </div>

        <!-- Banner -->
        <div class="banner">
            <img src="../assets/photos/banner3.png">
        </div>

        <!-- Popular -->
        <div class="category popular">
            <h1 class="category__title">Popular</h1>
            <div class="card__container">
                <?php
                  foreach($popular as $item) {
                      echo '<a href="./productPage.php?key='. $item['href_param'] .'" class="card">
                                <div class="card__img">
                                    <img src="'. $item['image'] .'"
                                        alt="">
                                </div>
                                <div class="card__content">
                                    <h4 class="card__title">'. $item['title'] .'</h4>
                                    <h4 class="card__price">'. number_format($item['price']) .' đ</h4>
                                    <p class="card__oldPrice">'. number_format($item['old_price']) .' đ</p>
                                    <div class="card__voucher">Quà tặng lên đến 200.000 đ</div>
                                    <div class="card__star">4.5 <ion-icon name="star" class="star__icon"></ion-icon>
                                    </div>
                                </div>
                            </a>';
                  }
                ?>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php
      include_once('../layout/footer.php');
    ?>
</body>

</html>