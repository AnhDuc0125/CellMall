<?php
    session_start();

    require_once("../database/dbContext.php");
    require_once("../database/utility.php");

    // Get orders of user
    $orderSQL = "SELECT order_items.*, products.title AS 'p-title', products.image AS 'p-image', products.storage AS 'p-storage', products.price AS 'p-price' FROM order_items, products WHERE order_items.product_id = products.id AND order_items.user_id = ". $_SESSION['currentUser']['id'];
    $orderResult = executeResult($orderSQL);
    
    // count of orders
    $countSQL = "SELECT COUNT(*) FROM order_items WHERE user_id = ".$_SESSION['currentUser']['id'];
    $countResult = executeResult($countSQL, true);

    // sub-price
    $subPriceSQL = "SELECT SUM(total_price) AS total_price FROM order_items WHERE user_id = ".$_SESSION['currentUser']['id'];
    $subPriceResult = executeResult($subPriceSQL, true);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CellMall | Cart</title>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="../assets/css/master.css">
    <link rel="stylesheet" href="../assets/css/layouts/navbar.css" />
    <link rel="stylesheet" href="../assets/css/layouts/footer.css" />
    <link rel="stylesheet" href="../assets/css/pages/cartPage.css">
    <!--Jquery cdn -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>

<body>
    <!-- Navbar and Component -->
    <?php
      include_once('../layout/navbar.php');
    ?>

    <div id="main">
        <div id="cart">
            <div class="yourCart">
                <div class="yourCart__title title">
                    <h2>SHOPPING CART</h2>
                    <p>You have <?=$countResult['COUNT(*)']?> item(s)</p>
                </div>
                <div class="yourCart__main">
                    <table class="yourCart__table">
                        <?php
                         if($countResult['COUNT(*)'] > 0) {
                             foreach($orderResult as $order) {
                                 echo  '<tr class="yourCart__product">
                                           <td class="thumbnail"><img
                                                   src="'. $order['p-image'] .'"
                                                   alt=""></td>
                                           <td class="detail">
                                               <h3 class="detail__title">'. $order['p-title'] .'</h3>
                                               <div class="detail__storage">'. $order['p-storage'] .' GB</div>
                                           </td>
                                           <td class="quantity">
                                               <div class="quantityBox">
                                                   <ion-icon class="quantity__btn subtraction__btn" name="remove-outline" onclick="minus('. $order['id'] .', '. $order['quantity'] - 1 .')"></ion-icon>
                                                   <input type="number" min="1" max="3" class="quantityForm" value="'. $order['quantity'] .'" readonly>
                                                   <ion-icon class="quantity__btn addition__btn" name="add-outline" onclick="plus('. $order['id'] .', '. $order['quantity'] + 1 .')"></ion-icon>
                                               </div>
               
                                           </td>
                                           <td class="price">'. number_format($order['p-price']) .' đ</td>
                                           <td class="remove">
                                               <ion-icon name="trash-outline" onclick="removeFromCart('. $order['id'] .')"></ion-icon>
                                           </td>
                                       </tr>';
                             }
                         } else {
                             echo "<h1>You have 0 items in cart :(</h1>";
                             echo "<h3 class='highlightText'><a href='homePage.php'>Go shopping</a></h3>";
                         }
                        ?>
                    </table>
                </div>
            </div>
            <div class="order">
                <div class="order__title title">
                    <h2>BILL</h2>
                    <p>Ready to delivery</p>
                </div>
                <div class="order__main">
                    <div class="order__total">
                        <h4>Sub-total</h4>
                        <p><?=number_format($subPriceResult['total_price'])?> <u>đ</u></p>
                    </div>
                    <div class="order__delivery">
                        <h4>Delivery</h4>
                        <select name="delevery" id="delivery" class="delivery__options">
                            <option value="free">Standard Delivery (Free)</option>
                            <option value="plus">Plus Delivery (20K)</option>
                            <option value="extra">Extra Delivery (50K)</option>
                        </select>
                    </div>
                </div>
                <button class="checkout__btn">CHECKOUT</button>
            </div>
        </div>
    </div>
</body>
<script>
function removeFromCart(id) {
    let removeConfirm =
        confirm("You want to remove this product from your cart ? ");
    if (removeConfirm) {
        $.post('order_api.php', {
                'id': id,
                'method': 'remove'
            },
            function(data) {
                location.reload();
            })
    }
}

function plus(id, quantityUpdated) {
    if (quantityUpdated > 3) {
        return;
    }
    $.post('order_api.php', {
            'id': id,
            'method': 'plus',
            'q': quantityUpdated
        },
        function(data) {
            location.reload();
            // console.log(data)
        })
}

function minus(id, quantityUpdated) {
    if (quantityUpdated < 1) {
        return;
    }
    $.post('order_api.php', {
            'id': id,
            'method': 'minus',
            'q': quantityUpdated
        },
        function(data) {
            location.reload();
            // console.log(data)
        })
}
</script>

</html>