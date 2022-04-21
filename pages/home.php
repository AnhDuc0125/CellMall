<?php
  session_start();

  require_once("../database/dbContext.php");

  $sql = "select * from products LIMIT 10";
  $products = executeResult($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home Page</title>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="../assets/css/master.css" />
    <link rel="stylesheet" href="../assets/css/navbar.css" />
    <link rel="stylesheet" href="../assets/css/footer.css" />
    <link rel="stylesheet" href="../assets/css/component.css" />
    <link rel="stylesheet" href="../assets/css/product.css" />
</head>

<body>
    <!-- Navbar and Component -->
    <?php
      include_once('../layout/navbar.php');
      include_once('../layout/component.php');
    ?>

    <!-- Main -->
    <div id="main">

        <!-- Banner -->
        <div class="banner">
            <img src="../assets/photos/banner1.png">
        </div>

        <!-- Best Seller -->
        <div class="product bestSeller">
            <h1 class="product__title">Best Seller</h1>
            <div class="card__container">
                <!-- Comment -->

                <?php
                  foreach($products as $item) {
                      echo ' <a href="#" class="card">
                                <div class="card__img">
                                    <img src="https://image.cellphones.com.vn/220x/media/catalog/product/s/m/sm-s908_galaxys22ultra_front_green_211119.jpg"
                                        alt="">
                                </div>
                                <div class="card__content">
                                    <h4 class="card__title">'. $item['title'] .'</h4>
                                    <h4 class="card__price">'. $item['price'] .' đ</h4>
                                    <p class="card__oldPrice">30.990.000 đ</p>
                                    <div class="card__voucher"> đ
                                    </div>
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
            <img src="../assets/photos/banner2.jpg">
        </div>

        <!-- On sale -->
        <div class="product onSale">
            <h1 class="product__title">On Sale</h1>
            <div class="card__container">
                <a href="#" class="card">
                    <div class="card__img">
                        <img src="https://image.cellphones.com.vn/220x/media/catalog/product/s/m/sm-s908_galaxys22ultra_front_green_211119.jpg"
                            alt="">
                    </div>
                    <div class="card__content">
                        <h4 class="card__title">Samsung Galaxy S22 Ultra</h4>
                        <h4 class="card__price">29.190.000 đ</h4>
                        <p class="card__oldPrice">30.990.000 đ</p>
                        <div class="card__voucher">Thu cũ lên đời - Trợ giá 500.000 đ</div>
                        <div class="card__star">4.5 <ion-icon name="star" class="star__icon"></ion-icon>
                        </div>
                    </div>
                </a>
                <a href="#" class="card">
                    <div class="card__img">
                        <img src="https://image.cellphones.com.vn/220x/media/catalog/product/s/m/sm-s908_galaxys22ultra_front_green_211119.jpg"
                            alt="">
                    </div>
                    <div class="card__content">
                        <h4 class="card__title">Samsung Galaxy S22 Ultra</h4>
                        <h4 class="card__price">29.190.000 đ</h4>
                        <p class="card__oldPrice">30.990.000 đ</p>
                        <div class="card__voucher">Thu cũ lên đời - Trợ giá 500.000 đ</div>
                        <div class="card__star">4.5 <ion-icon name="star" class="star__icon"></ion-icon>
                        </div>
                    </div>
                </a>
                <a href="#" class="card">
                    <div class="card__img">
                        <img src="https://image.cellphones.com.vn/220x/media/catalog/product/s/m/sm-s908_galaxys22ultra_front_green_211119.jpg"
                            alt="">
                    </div>
                    <div class="card__content">
                        <h4 class="card__title">Samsung Galaxy S22 Ultra</h4>
                        <h4 class="card__price">29.190.000 đ</h4>
                        <p class="card__oldPrice">30.990.000 đ</p>
                        <div class="card__voucher">Thu cũ lên đời - Trợ giá 500.000 đ</div>
                        <div class="card__star">4.5 <ion-icon name="star" class="star__icon"></ion-icon>
                        </div>
                    </div>
                </a>
                <a href="#" class="card">
                    <div class="card__img">
                        <img src="https://image.cellphones.com.vn/220x/media/catalog/product/s/m/sm-s908_galaxys22ultra_front_green_211119.jpg"
                            alt="">
                    </div>
                    <div class="card__content">
                        <h4 class="card__title">Samsung Galaxy S22 Ultra</h4>
                        <h4 class="card__price">29.190.000 đ</h4>
                        <p class="card__oldPrice">30.990.000 đ</p>
                        <div class="card__voucher">Thu cũ lên đời - Trợ giá 500.000 đ</div>
                        <div class="card__star">4.5 <ion-icon name="star" class="star__icon"></ion-icon>
                        </div>
                    </div>
                </a>
                <a href="#" class="card">
                    <div class="card__img">
                        <img src="https://image.cellphones.com.vn/220x/media/catalog/product/s/m/sm-s908_galaxys22ultra_front_green_211119.jpg"
                            alt="">
                    </div>
                    <div class="card__content">
                        <h4 class="card__title">Samsung Galaxy S22 Ultra</h4>
                        <h4 class="card__price">29.190.000 đ</h4>
                        <p class="card__oldPrice">30.990.000 đ</p>
                        <div class="card__voucher">Thu cũ lên đời - Trợ giá 500.000 đ</div>
                        <div class="card__star">4.5 <ion-icon name="star" class="star__icon"></ion-icon>
                        </div>
                    </div>
                </a>
                <a href="#" class="card">
                    <div class="card__img">
                        <img src="https://image.cellphones.com.vn/220x/media/catalog/product/s/m/sm-s908_galaxys22ultra_front_green_211119.jpg"
                            alt="">
                    </div>
                    <div class="card__content">
                        <h4 class="card__title">Samsung Galaxy S22 Ultra</h4>
                        <h4 class="card__price">29.190.000 đ</h4>
                        <p class="card__oldPrice">30.990.000 đ</p>
                        <div class="card__voucher">Thu cũ lên đời - Trợ giá 500.000 đ</div>
                        <div class="card__star">4.5 <ion-icon name="star" class="star__icon"></ion-icon>
                        </div>
                    </div>
                </a>
                <a href="#" class="card">
                    <div class="card__img">
                        <img src="https://image.cellphones.com.vn/220x/media/catalog/product/s/m/sm-s908_galaxys22ultra_front_green_211119.jpg"
                            alt="">
                    </div>
                    <div class="card__content">
                        <h4 class="card__title">Samsung Galaxy S22 Ultra</h4>
                        <h4 class="card__price">29.190.000 đ</h4>
                        <p class="card__oldPrice">30.990.000 đ</p>
                        <div class="card__voucher">Thu cũ lên đời - Trợ giá 500.000 đ</div>
                        <div class="card__star">4.5 <ion-icon name="star" class="star__icon"></ion-icon>
                        </div>
                    </div>
                </a>
                <a href="#" class="card">
                    <div class="card__img">
                        <img src="https://image.cellphones.com.vn/220x/media/catalog/product/s/m/sm-s908_galaxys22ultra_front_green_211119.jpg"
                            alt="">
                    </div>
                    <div class="card__content">
                        <h4 class="card__title">Samsung Galaxy S22 Ultra</h4>
                        <h4 class="card__price">29.190.000 đ</h4>
                        <p class="card__oldPrice">30.990.000 đ</p>
                        <div class="card__voucher">Thu cũ lên đời - Trợ giá 500.000 đ</div>
                        <div class="card__star">4.5 <ion-icon name="star" class="star__icon"></ion-icon>
                        </div>
                    </div>
                </a>
                <a href="#" class="card">
                    <div class="card__img">
                        <img src="https://image.cellphones.com.vn/220x/media/catalog/product/s/m/sm-s908_galaxys22ultra_front_green_211119.jpg"
                            alt="">
                    </div>
                    <div class="card__content">
                        <h4 class="card__title">Samsung Galaxy S22 Ultra</h4>
                        <h4 class="card__price">29.190.000 đ</h4>
                        <p class="card__oldPrice">30.990.000 đ</p>
                        <div class="card__voucher">Thu cũ lên đời - Trợ giá 500.000 đ</div>
                        <div class="card__star">4.5 <ion-icon name="star" class="star__icon"></ion-icon>
                        </div>
                    </div>
                </a>
                <a href="#" class="card">
                    <div class="card__img">
                        <img src="https://image.cellphones.com.vn/220x/media/catalog/product/s/m/sm-s908_galaxys22ultra_front_green_211119.jpg"
                            alt="">
                    </div>
                    <div class="card__content">
                        <h4 class="card__title">Samsung Galaxy S22 Ultra</h4>
                        <h4 class="card__price">29.190.000 đ</h4>
                        <p class="card__oldPrice">30.990.000 đ</p>
                        <div class="card__voucher">Thu cũ lên đời - Trợ giá 500.000 đ
                        </div>
                        <div class="card__star">4.5 <ion-icon name="star" class="star__icon"></ion-icon>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <!-- Banner -->
        <div class="banner">
            <img src="../assets/photos/banner3.png">
        </div>

        <!-- Popular -->
        <div class="product popular">
            <h1 class="product__title">Popular</h1>
            <div class="card__container">
                <a href="#" class="card">
                    <div class="card__img">
                        <img src="https://image.cellphones.com.vn/220x/media/catalog/product/s/m/sm-s908_galaxys22ultra_front_green_211119.jpg"
                            alt="">
                    </div>
                    <div class="card__content">
                        <h4 class="card__title">Samsung Galaxy S22 Ultra</h4>
                        <h4 class="card__price">29.190.000 đ</h4>
                        <p class="card__oldPrice">30.990.000 đ</p>
                        <div class="card__voucher">Thu cũ lên đời - Trợ giá 500.000 đ</div>
                        <div class="card__star">4.5 <ion-icon name="star" class="star__icon"></ion-icon>
                        </div>
                    </div>
                </a>
                <a href="#" class="card">
                    <div class="card__img">
                        <img src="https://image.cellphones.com.vn/220x/media/catalog/product/s/m/sm-s908_galaxys22ultra_front_green_211119.jpg"
                            alt="">
                    </div>
                    <div class="card__content">
                        <h4 class="card__title">Samsung Galaxy S22 Ultra</h4>
                        <h4 class="card__price">29.190.000 đ</h4>
                        <p class="card__oldPrice">30.990.000 đ</p>
                        <div class="card__voucher">Thu cũ lên đời - Trợ giá 500.000 đ</div>
                        <div class="card__star">4.5 <ion-icon name="star" class="star__icon"></ion-icon>
                        </div>
                    </div>
                </a>
                <a href="#" class="card">
                    <div class="card__img">
                        <img src="https://image.cellphones.com.vn/220x/media/catalog/product/s/m/sm-s908_galaxys22ultra_front_green_211119.jpg"
                            alt="">
                    </div>
                    <div class="card__content">
                        <h4 class="card__title">Samsung Galaxy S22 Ultra</h4>
                        <h4 class="card__price">29.190.000 đ</h4>
                        <p class="card__oldPrice">30.990.000 đ</p>
                        <div class="card__voucher">Thu cũ lên đời - Trợ giá 500.000 đ</div>
                        <div class="card__star">4.5 <ion-icon name="star" class="star__icon"></ion-icon>
                        </div>
                    </div>
                </a>
                <a href="#" class="card">
                    <div class="card__img">
                        <img src="https://image.cellphones.com.vn/220x/media/catalog/product/s/m/sm-s908_galaxys22ultra_front_green_211119.jpg"
                            alt="">
                    </div>
                    <div class="card__content">
                        <h4 class="card__title">Samsung Galaxy S22 Ultra</h4>
                        <h4 class="card__price">29.190.000 đ</h4>
                        <p class="card__oldPrice">30.990.000 đ</p>
                        <div class="card__voucher">Thu cũ lên đời - Trợ giá 500.000 đ</div>
                        <div class="card__star">4.5 <ion-icon name="star" class="star__icon"></ion-icon>
                        </div>
                    </div>
                </a>
                <a href="#" class="card">
                    <div class="card__img">
                        <img src="https://image.cellphones.com.vn/220x/media/catalog/product/s/m/sm-s908_galaxys22ultra_front_green_211119.jpg"
                            alt="">
                    </div>
                    <div class="card__content">
                        <h4 class="card__title">Samsung Galaxy S22 Ultra</h4>
                        <h4 class="card__price">29.190.000 đ</h4>
                        <p class="card__oldPrice">30.990.000 đ</p>
                        <div class="card__voucher">Thu cũ lên đời - Trợ giá 500.000 đ</div>
                        <div class="card__star">4.5 <ion-icon name="star" class="star__icon"></ion-icon>
                        </div>
                    </div>
                </a>
                <a href="#" class="card">
                    <div class="card__img">
                        <img src="https://image.cellphones.com.vn/220x/media/catalog/product/s/m/sm-s908_galaxys22ultra_front_green_211119.jpg"
                            alt="">
                    </div>
                    <div class="card__content">
                        <h4 class="card__title">Samsung Galaxy S22 Ultra</h4>
                        <h4 class="card__price">29.190.000 đ</h4>
                        <p class="card__oldPrice">30.990.000 đ</p>
                        <div class="card__voucher">Thu cũ lên đời - Trợ giá 500.000 đ</div>
                        <div class="card__star">4.5 <ion-icon name="star" class="star__icon"></ion-icon>
                        </div>
                    </div>
                </a>
                <a href="#" class="card">
                    <div class="card__img">
                        <img src="https://image.cellphones.com.vn/220x/media/catalog/product/s/m/sm-s908_galaxys22ultra_front_green_211119.jpg"
                            alt="">
                    </div>
                    <div class="card__content">
                        <h4 class="card__title">Samsung Galaxy S22 Ultra</h4>
                        <h4 class="card__price">29.190.000 đ</h4>
                        <p class="card__oldPrice">30.990.000 đ</p>
                        <div class="card__voucher">Thu cũ lên đời - Trợ giá 500.000 đ</div>
                        <div class="card__star">4.5 <ion-icon name="star" class="star__icon"></ion-icon>
                        </div>
                    </div>
                </a>
                <a href="#" class="card">
                    <div class="card__img">
                        <img src="https://image.cellphones.com.vn/220x/media/catalog/product/s/m/sm-s908_galaxys22ultra_front_green_211119.jpg"
                            alt="">
                    </div>
                    <div class="card__content">
                        <h4 class="card__title">Samsung Galaxy S22 Ultra</h4>
                        <h4 class="card__price">29.190.000 đ</h4>
                        <p class="card__oldPrice">30.990.000 đ</p>
                        <div class="card__voucher">Thu cũ lên đời - Trợ giá 500.000 đ</div>
                        <div class="card__star">4.5 <ion-icon name="star" class="star__icon"></ion-icon>
                        </div>
                    </div>
                </a>
                <a href="#" class="card">
                    <div class="card__img">
                        <img src="https://image.cellphones.com.vn/220x/media/catalog/product/s/m/sm-s908_galaxys22ultra_front_green_211119.jpg"
                            alt="">
                    </div>
                    <div class="card__content">
                        <h4 class="card__title">Samsung Galaxy S22 Ultra</h4>
                        <h4 class="card__price">29.190.000 đ</h4>
                        <p class="card__oldPrice">30.990.000 đ</p>
                        <div class="card__voucher">Thu cũ lên đời - Trợ giá 500.000 đ</div>
                        <div class="card__star">4.5 <ion-icon name="star" class="star__icon"></ion-icon>
                        </div>
                    </div>
                </a>
                <a href="#" class="card">
                    <div class="card__img">
                        <img src="https://image.cellphones.com.vn/220x/media/catalog/product/s/m/sm-s908_galaxys22ultra_front_green_211119.jpg"
                            alt="">
                    </div>
                    <div class="card__content">
                        <h4 class="card__title">Samsung Galaxy S22 Ultra</h4>
                        <h4 class="card__price">29.190.000 đ</h4>
                        <p class="card__oldPrice">30.990.000 đ</p>
                        <div class="card__voucher">Thu cũ lên đời - Trợ giá 500.000 đ
                        </div>
                        <div class="card__star">4.5 <ion-icon name="star" class="star__icon"></ion-icon>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php
      include_once('../layout/footer.php');
    ?>
</body>

</html>