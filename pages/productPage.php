<?php
    session_start();

    require_once("../database/dbContext.php");
    require_once("../database/utility.php");

    // Check login
    $haveLog = 0;
    if(isset($_SESSION['currentUser'])) {
        $haveLog = 1;
    }

  if(!empty($_GET)) {
      $key = getGet('key');
      $productSQl = "SELECT products.*, brands.name as brand_name FROM products, brands WHERE products.brand_id = brands.id AND href_param = '$key'";
      $product = executeResult($productSQl, true);

      $otherBrandProductSQL = "SELECT * FROM products where brand_id != '". $product['brand_id'] ."' LIMIT 2";
      $otherBrandProduct = executeResult($otherBrandProductSQL);

      $sameBrandProductSQL = "SELECT * FROM products where brand_id = '". $product['brand_id'] ."' AND title NOT LIKE '". $product['title'] ."' LIMIT 5";
      $sameBrandProduct = executeResult($sameBrandProductSQL);

      $relatedProductSQL = "SELECT * FROM products where brand_id = '". $product['brand_id'] ."' LIMIT 5";
      $realtedProducts = executeResult($relatedProductSQL);
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
    <link rel="stylesheet" href="../assets/css/layouts/productCard.css" />
    <!--Jquery cdn -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

</head>

<body>
    <!-- Navbar and Component -->
    <?php
      include_once('../layout/navbar.php');
    ?>

    <!-- navbar -->
    <div id="main">
        <div class="shortcut">
            <a class="shortcut__link" href="homePage.php">Home</a>
            >
            <a class="shortcut__link"
                href="searchPage.php?brand=<?=$product['brand_name']?>"><?=$product['brand_name']?></a>
            >
            <a class="shortcut__link" href="#"><?=$product['title']?></a>
        </div>
        <div class="product">
            <h2 class="product__title"><?=$product['title']?> | VN/A</h2>
            <div class="product__detail">
                <div class="detail__left">
                    <img src="<?=$product['image']?>" alt="" class="detail__image" />
                </div>
                <div class="product__middle">
                    <div class="product__price">
                        <h2 style="display: inline-block"><?=number_format($product['price'])?> <u>đ</u></h2>
                        | VAT included
                    </div>

                    <h3 class="product__oldPrice">
                        Giá cũ: <span><?=number_format($product['old_price'] + 2000000)?> <u>đ</u></span>
                    </h3>
                    <div class="product__desc">
                        <ul>
                            <li>Powerful, super-fast with A14 chip, 6GB RAM, high-speed 5G network</li>
                            <li>
                                Brilliant, sharp, high brightness - Premium OLED display, Super Retina XDR with HDR10
                                support,
                                Dolby Vision
                            </li>
                            <li>Super photography - Night Mode, Deep Fusion algorithm, Smart HDR 3, LiDar . camera</li>
                            <li>Outstanding durability - IP68 waterproof, dustproof, Ceramic Shield back panel</li>
                        </ul>
                    </div>
                    <button class="product__addToCart_btn" onclick="addToCart(<?=$product['id']?>)">
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
            <a href="../product_doc.docx" class="download" download="product_document">Download document of
                <?=$product['title']?></a>
        </div>
        <!-- Related Products -->
        <div class="category popular">
            <h1 class="category__title">Related Products</h1>
            <div class="card__container">
                <?php
                  foreach($realtedProducts as $item) {
                      echo '<a href="./productPage.php?key='. $item['href_param'] .'" class="card">
                                <div class="card__img">
                                    <img src="'. $item['image'] .'"
                                        alt="">
                                </div>
                                <div class="card__content">
                                    <h4 class="card__title">'. $item['title'] .'</h4>
                                    <h4 class="card__price">'. number_format($item['price']) .' đ</h4>
                                    <p class="card__oldPrice">'. number_format($item['price'] + 2000000) .' đ</p>
                                    <div class="card__voucher">'. $item['voucher'] .'</div>
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
<script>
function addToCart(id) {
    let haveLog = <?=$haveLog?>;
    if (haveLog) {
        //add animation class
        cart = document.querySelector('.symbol.cart');
        cart.classList.add('success');

        $.post("../api/order_api.php", {
            'id': id,
            'method': 'add'
        }, function(data) {})
    } else {
        window.location.replace("loginPage.php")
    }
}
</script>

</html>