<?php
    session_start();

    if(!isset($_SESSION['currentUser'])) {
        header("Location: loginPage.php");  
    }
    
    require_once("../database/dbContext.php");
    require_once("../database/utility.php");

    
    // Get orders of user
    $orderSQL = "SELECT order_items.*, products.title AS 'p-title', products.image AS 'p-image', products.storage AS 'p-storage', products.price AS 'p-price', products.href_param AS 'p-href' FROM order_items, products WHERE order_items.product_id = products.id AND order_items.user_id = ". $_SESSION['currentUser']['id'];
    $orderResult = executeResult($orderSQL);
    
    // Get user infomation
    $userSQL = "SELECT * FROM users WHERE id = ".$_SESSION['currentUser']['id'];
    $userResult = executeResult($userSQL, true);
    
    // sub-price
    $subPriceSQL = "SELECT SUM(total_price) AS total_price FROM order_items WHERE user_id = ".$_SESSION['currentUser']['id'];
    $subPriceResult = executeResult($subPriceSQL, true);
    
    if(!empty($_POST)) {
        $recipient = $_SESSION['currentUser']['fullname'];
        $phone = $_SESSION['currentUser']['phone'];
        $user_id = $_SESSION['currentUser']['id'];
        $address = getPost('address');
        $message = getPost('message');
        $total_price = getPost('total_price');

        $checkoutSQL = "INSERT INTO orders (recipient, phone, user_id, address, message, total_price) VALUES ('$recipient', '$phone', '$user_id', '$address', '$message', '$total_price')";
        execute($checkoutSQL);   

        header("Location: homePage.php");
    }
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
    <link rel="stylesheet" href="../assets/css/pages/checkoutPage.css">
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
        <form method="post" id="checkout">
            <div class="checkout__header">
                <h2 class="checkout__title">CHECKOUT</h2>
                <div class="checkout__address">
                    <span>
                        <ion-icon name="home-outline"></ion-icon> | Your Address
                    </span>
                    <table>
                        <tr>
                            <th class="name phone">
                                <ul>
                                    <li class="name"><?=$userResult['fullname']?></li>
                                    <li class="phone" style="font-size: 15px"><?=$userResult['phone']?></li>
                                </ul>
                            </th>
                            <td class="address">
                                <textarea name="address"
                                    onfocus="setSelectionRange(0, this.value.length)"><?=$userResult['address']?></textarea>
                            </td>
                            <td><button type="button" class="change__btn">Change Address</button></td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="checkout__body">
                <div class="checkout__item">
                    <table>
                        <thead>
                            <tr class="header__table">
                                <td style="font-size: 20px; text-align: left">Product</td>
                                <td></td>
                                <td>Quantity</td>
                                <td>Price</td>
                                <td>Sub-price</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                             foreach($orderResult as $order) {
                                 echo   '<tr>
                                            <td class="thumbnail">
                                                <img src="'. $order['p-image'] .'">
                                            </td>
                                           <td class="detail">
                                               <a href="productPage.php?key='. $order['p-href'] .'">
                                                   <h3 class="detail__title">'. $order['p-title'] .'</h3>
                                               </a>
                                               <div class="detail__storage">'. $order['p-storage'] .' GB</div>
                                           </td>
                                           <td class="quantity">
                                                <p>'. $order['quantity'] .'</p>
                                           </td>
                                           <td class="price">'. number_format($order['p-price']) .' đ</td>
                                           <th class="total_price">'. number_format($order['total_price']) .' đ</th>
                                       </tr>';
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="checkout__footer">
                <div class="beforeCheckout">
                    <div class="methodPayment">
                        <h2>METHOD PAYMENT</h2>
                        <select name="method" class="methodForm">
                            <option value="cash">Cash</option>
                            <option value="debit">Debit cards</option>
                            <option value="credit">Credit cards</option>
                        </select>
                    </div>
                    <div class="messageToShipper">
                        <label>Message to shipper:</label>
                        <textarea name="massage" cols="30" rows="10"></textarea>
                    </div>
                </div>
                <div class="checkoutBox">
                    <table>
                        <tr class="checkout__price">
                            <th>Stuff</th>
                            <td class="fee"><?=number_format($subPriceResult['total_price'])?> đ</td>
                        </tr>
                        <tr class="checkout__shipping">
                            <th>Shipping fee</th>
                            <td class="fee">50,000 đ</td>
                        </tr>
                        <tr class="checkout__total">
                            <th>
                                <h2>Total</h2>
                            </th>
                            <td class="fee">
                                <h2><?=number_format($subPriceResult['total_price'] + 50000)?> đ</h2>
                                <input type="hidden" name="total_price"
                                    value="<?=$subPriceResult['total_price'] + 50000?>">
                            </td>
                        </tr>
                    </table>
                    <button class="checkout__btn"
                        onclick="checkout(<?=$_SESSION['currentUser']['id']?>)">CHECKOUT</button>
                </div>
            </div>
        </form>
    </div>

    <!-- Footer -->
    <?php
      include_once('../layout/footer.php');
    ?>
</body>
<script>
function checkout(user_id) {
    $.post("../api/order_api.php", {
        'user_id': user_id,
        'method': 'checkout',
        function(data) {

        }
    })
}

$('.change__btn').click(function() {
    $('[name=address]').focus()
})
</script>

</html>