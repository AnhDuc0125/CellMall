<?php
  $getBrand = "select * from brands";
  $brandList = executeResult($getBrand);
?>
<div id="component">
    <div id="manu">
        <div class="manu">
            <ul class="manu__items">
                <li class="manu__item title">
                    <h2 class="brand__title">Brands</h2>
                </li>
                <?php
                  foreach($brandList as $item) {
                      echo '<li class="manu__item">
                                <a href="searchPage.php?key='. $item['name'] .'" class="item__link">'. $item['name'] .'</a>
                            </li>';
                  }
                ?>
            </ul>
        </div>
    </div>
    <div id="gallery"></div>
    <div id="gallery__footer">
        <div class="gallery__footer">
            <img src="../assets/photos/banner.jpg">
        </div>
    </div>
</div>
<script src="../assets/js/gallery.js"></script>
<script>
Gallery('../assets/photos/', 'slider.png', 'slider1.jpg', 'slider2.jpg', 'slider3.png', 'slider4.png');
</script>