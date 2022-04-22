<div id="manu">
    <div class="manu">
        <ul class="manu__items">
            <?php
                  foreach($manuList as $item) {
                      echo '<li class="manu__item">
                                <a href="search.php?key='. $item['name'] .'" class="item__link">'. $item['name'] .'</a>
                            </li>';
                  }
                ?>
        </ul>
    </div>
</div>