<?php
    require_once("../database/dbContext.php");
    require_once("../database/utility.php");

  $getBrand = "select * from brands";
  $brandList = executeResult($getBrand);

    if(!empty($_GET)){
        $searchByBrand = getGet('brand');
        $resultSql = "select products.*, brands.name from products, brands where products.brand_id = brands.id and brands.name = '$searchByBrand'";
        $resultByBrand = executeResult($resultSql);
        $resultByName = null;
        
        if(isset($_GET['key'])){
            $searchByName = getGet('key');
            $resultSql = "select * from products where title LIKE '%$searchByName%'";
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

        <div id="options">
            <div class="filter">
                <h2 class="filter__title">Filter</h2>
                <div class="filter__content">
                    <div class="filter__item onSale">
                        <a href="#" class="filter__content filter__btn bestSeller__content">On Sale</a>

                    </div>
                    <div class="filter__item popular">
                        <a href="#" class="filter__content filter__btn bestSeller__content">Popular</a>

                    </div>
                    <div class="filter__item bestSeller">
                        <a href="#" class="filter__content filter__btn bestSeller__content">Best Seller</a>
                    </div>
                    <div class="filter__item" id="price">
                        <div class="filter__btn">
                            <div class="filter__content">Price</div>
                            <div class="down__icon">
                                <ion-icon name="chevron-down-outline"></ion-icon>
                            </div>
                        </div>
                        <div class="filter__dropdown">
                            <ul class="dropdown__list">
                                <li class="dropdown__item"><a href="#" class="filter__content dropdown__link">1 -
                                        3 triệu</a></li>
                                <li class="dropdown__item"><a href="#" class="filter__content dropdown__link">3 -
                                        6 triệu</a></li>
                                <li class="dropdown__item"><a href="#" class="filter__content dropdown__link">6 -
                                        9 triệu</a></li>
                                <li class="dropdown__item"><a href="#" class="filter__content dropdown__link">9 -
                                        12 triệu</a></li>
                                <li class="dropdown__item"><a href="#" class="filter__content dropdown__link">Trên
                                        12 triệu</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="filter__item" id="RAM">
                        <div class="filter__btn">
                            <div class="filter__content">RAM</div>
                            <div class="down__icon">
                                <ion-icon name="chevron-down-outline"></ion-icon>
                            </div>
                        </div>
                        <div class="filter__dropdown">
                            <ul class="dropdown__list">
                                <li class="dropdown__item"><a href="#" class="filter__content dropdown__link">Dưới 4
                                        GB</a></li>
                                <li class="dropdown__item"><a href="#" class="filter__content dropdown__link">4 -
                                        6 GB</a></li>
                                <li class="dropdown__item"><a href="#" class="filter__content dropdown__link">6 -
                                        8 GB</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="filter__item" id="storage">
                        <div class="filter__btn">
                            <div class="filter__content">Storage</div>
                            <div class="down__icon">
                                <ion-icon name="chevron-down-outline"></ion-icon>
                            </div>
                        </div>
                        <div class="filter__dropdown">
                            <ul class="dropdown__list">
                                <li class="dropdown__item"><a class="dropdown__link">Dưới
                                        64 GB</a></li>
                                <li class="dropdown__item"><a class="dropdown__link">64
                                        GB</a></li>
                                <li class="dropdown__item"><a class="dropdown__link">128
                                        GB</a></li>
                                <li class="dropdown__item"><a class="dropdown__link">256
                                        GB</a></li>
                                <li class="dropdown__item"><a class="dropdown__link">512
                                        GB</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sort">
                <h2 class="sort__title">Sort by</h2>
                <div class="sort__content">
                    <a href="#" class="sort__item">
                        <div class="sort__icon">
                            <ion-icon name="trending-up-outline"></ion-icon>
                        </div>
                        <div class="sort__content">Price low to high</div>
                    </a>
                    <a href="#" class="sort__item">
                        <div class="sort__icon">
                            <ion-icon name="trending-down-outline"></ion-icon>
                        </div>
                        <div class="sort__content">Price high to low</div>
                    </a>
                    <a href="#" class="sort__item">
                        <div class="sort__icon">
                            <ion-icon name="flame-outline"></ion-icon>
                        </div>
                        <div class="sort__content">On sale</div>
                    </a>
                    <a href="#" class="sort__item">
                        <div class="sort__icon">
                            <ion-icon name="trophy-outline"></ion-icon>
                        </div>
                        <div class="sort__content">Best Seller</div>
                    </a>
                </div>
            </div>
        </div>
        <div class="product result">
            <h1 class="product__title"><?=$searchByBrand?>
                <?php  
                if($resultByBrand == null && $resultByName == null) {
                    echo "<h1>Oops! Sorry, we don't have that products :(</h1>";
                }
            ?>
            </h1>
            <div class="card__container">
                <?php
                if($resultByBrand != null) {
                    foreach($resultByBrand as $item) {
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