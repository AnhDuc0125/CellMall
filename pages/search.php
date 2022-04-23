<?php
    require_once("../database/dbContext.php");
    require_once("../database/utility.php");

  $getManu = "select * from manufacturers";
  $manuList = executeResult($getManu);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CellMall</title>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="../assets/css/master.css">
    <link rel="stylesheet" href="../assets/css/search.css">
    <link rel="stylesheet" href="../assets/css/navbar.css">
    <link rel="stylesheet" href="../assets/css/manu.css">
    <link rel="stylesheet" href="../assets/css/footer.css">
</head>

<body>
    <!-- Navbar and Component -->
    <?php
      include_once('../layout/navbar.php');
      include_once('../layout/manu.php');
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
                    <a href="#" class="filter__item onSale">
                        <div class="onSale__content">On Sale</div>
                    </a>
                    <a href="#" class="filter__item popular">
                        <div class="popular__content">Popular</div>
                    </a>
                    <a href="#" class="filter__item bestSeller">
                        <div class="bestSeller__content">Best Seller</div>
                    </a>
                    <a href="#" class="filter__item available">
                        <div class="available__content">Available</div>
                    </a>
                    <div class="filter__item" id="price">
                        <div class="filter__btn">
                            <div class="filter__content">Price</div>
                            <div class="down__icon">
                                <ion-icon name="chevron-down-outline"></ion-icon>
                            </div>
                        </div>
                        <div class="filter__dropdown">
                            <ul class="dropdown__list">
                                <li class="dropdown__item"><a href="#" class="dropdown__link">1 - 3 triệu</a></li>
                                <li class="dropdown__item"><a href="#" class="dropdown__link">3 - 6 triệu</a></li>
                                <li class="dropdown__item"><a href="#" class="dropdown__link">6 - 9 triệu</a></li>
                                <li class="dropdown__item"><a href="#" class="dropdown__link">9 - 12 triệu</a></li>
                                <li class="dropdown__item"><a href="#" class="dropdown__link">Trên 12 triệu</a></li>
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
                                <li class="dropdown__item"><a href="#" class="dropdown__link">Dưới 4 GB</a></li>
                                <li class="dropdown__item"><a href="#" class="dropdown__link">4 - 6 GB</a></li>
                                <li class="dropdown__item"><a href="#" class="dropdown__link">6 - 8 GB</a></li>
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
                                <li class="dropdown__item"><a href="#" class="dropdown__link">Dưới 64 GB</a></li>
                                <li class="dropdown__item"><a href="#" class="dropdown__link">64 GB</a></li>
                                <li class="dropdown__item"><a href="#" class="dropdown__link">128 GB</a></li>
                                <li class="dropdown__item"><a href="#" class="dropdown__link">256 GB</a></li>
                                <li class="dropdown__item"><a href="#" class="dropdown__link">512 GB</a></li>
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
    </div>

    <!-- Footer -->
    <?php
      include_once('../layout/footer.php');
    ?>
</body>
<script src="../assets/js/dropdown.js"></script>

</html>