<?php
    require_once("../database/dbContext.php");
    require_once("../database/utility.php");

  $getBrand = "select * from brands";
  $brandList = executeResult($getBrand);
  $result = null;
    if(!empty($_GET)){
        if(isset($_GET['brand'])){
            $searchByBrand = getGet('brand');
            $resultSql = "SELECT products.*, brands.name FROM products, brands WHERE products.brand_id = brands.id AND brands.name = '$searchByBrand'";
            $result = executeResult($resultSql);
            $resultByName = null;

            if(isset($_GET['cate'])){
                $searchByCate = getGet('cate');
                $cateSql = "SELECT products.*, categories.name, brands.name FROM products, categories, brands WHERE products.cate_id = categories.id AND categories.name = '$searchByCate' AND products.brand_id = brands.id AND brands.name = '$searchByBrand'";
                $result = executeResult($cateSql);
            }

            if(isset($_GET['filter'])){
                if(isset($_GET['cate'])) {
                    $resultSql = "SELECT products.*, categories.name, brands.name FROM products, categories, brands WHERE products.cate_id = categories.id AND categories.name = '$searchByCate' AND products.brand_id = brands.id AND brands.name = '$searchByBrand' ORDER BY products.price ".$_GET['filter'];
                    $result = executeResult($resultSql);
                } else {
                    $resultSql = "SELECT products.*, brands.name FROM products, brands WHERE products.brand_id = brands.id AND brands.name = '$searchByBrand' ORDER BY products.price ". $_GET['filter'] ."";
                    $result = executeResult($resultSql);
                }
            }
        }
        
        if(isset($_GET['key'])){
            $searchByName = getGet('key');
            $resultSql = "SELECT * FROM products WHERE title LIKE '%$searchByName%'";
            $resultByName = executeResult($resultSql);
        }

    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CellMall | Search by key</title>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="../assets/css/master.css">
    <link rel="stylesheet" href="../assets/css/layouts/brands.css">
    <link rel="stylesheet" href="../assets/css/layouts/navbar.css" />
    <link rel="stylesheet" href="../assets/css/layouts/footer.css" />
    <link rel="stylesheet" href="../assets/css/layouts/productCard.css">
    <link rel="stylesheet" href="../assets/css/pages/searchPage.css">
</head>

<body>
    <!-- Navbar and Component -->
    <?php
      include_once('../layout/navbar.php');
      include_once('../layout/brands.php');
    ?>

    <div id="main">

        <!-- Banner -->
        <div class="banner">
            <img src="../assets/photos/banner3.png">
        </div>

        <p class="headerSearch">Your search:
            <span>
                <?php 
                    if(!empty($_GET['brand'])){
                        echo $_GET['brand'];
                    } else {
                        echo $_GET['key'];
                    }
                ?>
            </span>
        </p>

        <div id="options">
            <div class="cate">
                <h3 class="cate__title">Category</h3>
                <div class="cate__content">
                    <div class="cate__item onSale">
                        <a class="cate__content cate__btn bestSeller__content" id="onSale"
                            onclick="addCategory('on Sale')">On
                            Sale</a>
                    </div>
                    <div class="cate__item popular">
                        <a class="cate__content cate__btn bestSeller__content" id="popular"
                            onclick="addCategory('popular')">Popular</a>
                    </div>
                    <div class="cate__item bestSeller">
                        <a class="cate__content cate__btn bestSeller__content" id="bestSeller"
                            onclick="addCategory('best Seller')">Best
                            Seller</a>
                    </div>
                    <p class="remove__btn" onclick="removeParam('cate')">Remove Category</p>
                </div>
            </div>
            <div class="filter">
                <h3 class="filter__title">Filter</h3>
                <div class="filter__content">
                    <a href="#" class="filter__item" id="ASC" onclick="addFilter('ASC')">
                        <div class="filter__icon">
                            <ion-icon name="trending-up-outline"></ion-icon>
                        </div>
                        <div class="filter__content">Price low to high</div>
                    </a>
                    <a href="#" class="filter__item" id="DESC" onclick="addFilter('DESC')">
                        <div class="filter__icon">
                            <ion-icon name="trending-down-outline"></ion-icon>
                        </div>
                        <div class="filter__content">Price high to low</div>
                    </a>
                    <p class="remove__btn" onclick="removeParam('filter')">Remove Filter</p>
                </div>
            </div>
        </div>
        <div class="product result">
            <h1 class="product__title">
                <?php  
                if($result == null && $resultByName == null) {
                    echo "<h1>Oops! Sorry, we don't have that products :(</h1>";
                }
            ?>
            </h1>
            <div class="card__container">
                <?php
                if($result != null) {
                    foreach($result as $item) {
                        echo '<a href="productPage.php?key='. $item['href_param'] .'" class="card">
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
                }
                if(isset($_GET['key'])){
                        foreach($resultByName as $item) {
                            echo '<a href="productPage.php?key='. $item['href_param'] .'" class="card">
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
<script src="../assets/js/dropdown.js"></script>
<script src="../assets/js/urlProcess.js"></script>

</html>