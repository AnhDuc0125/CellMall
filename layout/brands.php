<div id="brand">
    <div class="brand">
        <ul class="brand__items">
            <?php
                  foreach($brandList as $item) {
                      echo '<li class="brand__item">
                                <a href="searchPage.php?brand='. $item['name'] .'" class="item__link">'. $item['name'] .'</a>
                            </li>';
                  }
                ?>
        </ul>
    </div>
</div>