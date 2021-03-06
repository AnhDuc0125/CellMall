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
            <h1 class="header">Best Seller</h1>
            <div class="card__container">
                <?php
                  foreach($bestSeller as $item) {
                      echo  '<a href="./productPage.php?key='. $item['href_param'] .'" class="card">
                                <div class="card__img">
                                    <img src="'. $item['image'] .'">
                                </div>
                                <div class="card__content">
                                    <h4 class="card__title">'. $item['title'] .'</h4>
                                    <h4 class="card__price">'. number_format($item['price']) .' ??</h4>
                                    <p class="card__oldPrice">'. number_format($item['price'] + 2000000) .' ??</p>
                                    <div class="card__voucher">'. $item['voucher'] .'</div>
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
            <h1 class="header">On Sale</h1>
            <div class="card__container">
                <?php
                  foreach($onSale as $item) {
                      echo  '<a href="./productPage.php?key='. $item['href_param'] .'" class="card">
                                <div class="card__img">
                                    <img src="'. $item['image'] .'">
                                </div>
                                <div class="card__content">
                                    <h4 class="card__title">'. $item['title'] .'</h4>
                                    <h4 class="card__price">'. number_format($item['price']) .' ??</h4>
                                    <p class="card__oldPrice">'. number_format($item['price'] + 2000000) .' ??</p>
                                    <div class="card__voucher">'. $item['voucher'] .'</div>
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
            <h1 class="header">Popular</h1>
            <div class="card__container">
                <?php
                  foreach($popular as $item) {
                      echo '<a href="./productPage.php?key='. $item['href_param'] .'" class="card">
                                <div class="card__img">
                                    <img src="'. $item['image'] .'">
                                </div>
                                <div class="card__content">
                                    <h4 class="card__title">'. $item['title'] .'</h4>
                                    <h4 class="card__price">'. number_format($item['price']) .' ??</h4>
                                    <p class="card__oldPrice">'. number_format($item['price'] + 2000000) .' ??</p>
                                    <div class="card__voucher">'. $item['voucher'] .'</div>
                                </div>
                            </a>';
                  }
                ?>
            </div>
        </div>

        <!-- Banner -->
        <div class="banner">
            <img src="../assets/photos/banner3.jpg">
        </div>

        <!-- News -->
        <h1 class="header">News</h1>
        <div id="news">
            <div class="news__banner left">
                <img src="../assets/photos/news.jpg">
            </div>
            <div class="news__banner right">
                <img src="../assets/photos/news2.jpg">
            </div>
            <div class="news__card">
                <div class="news__img">
                    <img src="../assets/photos/news3.jpg">
                </div>
                <div class="news__footer">
                    <h3 class="news__title">Thi???t k??? Oppo Find X5 Pro g??y ???n t?????ng</h3>
                    <p class="news__desc">Oppo Find X5 Pro v???i lo???t c??ng ngh??? hi???n ?????i c??ng thi???t k??? b???ng g???m tinh x???o
                        ???? nh???n ???????c gi???i th?????ng iF Design Award 2022.</p>
                </div>
            </div>
            <div class="news__card">
                <div class="news__img">
                    <img src="../assets/photos/news4.jpg">
                </div>
                <div class="news__footer">
                    <h3 class="news__title">Reno Series - n??? l???c s??ng t???o c???a Oppo</h3>
                    <p class="news__desc">Ch??a ?????y ba n??m, 7 th??? h??? Oppo Reno Series li??n t???c c???i ti???n c??? v??? thi???t k???
                        l???n c??ng ngh???.</p>
                </div>
            </div>
            <div class="news__card">
                <div class="news__img">
                    <img src="../assets/photos/news5.jpg">
                </div>
                <div class="news__footer">
                    <h3 class="news__title">iPhone 11 l?? smartphone Apple b??n ch???y nh???t 2020</h3>
                    <p class="news__desc">Apple ???????c cho l?? s??? h??? gi?? iPhone 11 v??o gi???a th??ng 9 c??ng tai nghe
                        AirPods Pro 2 v?? ba m???u Apple Watch.</p>
                </div>
            </div>
            <div class="news__card">
                <div class="news__img">
                    <img src="../assets/photos/news6.jpg">
                </div>
                <div class="news__footer">
                    <h3 class="news__title">Samsung Galaxy S20 s??? d??ng chip Snapdragon</h3>
                    <p class="news__desc">So v???i model c?? d??ng Exynos 990, Galaxy S20 FE b???n 2021 s??? d???ng chip
                        Snapdragon 865 nh??ng v???n ch??a c?? k???t n???i 5G.</p>
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