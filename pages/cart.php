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
    <link rel="stylesheet" href="../assets/css/cart.css">
    <link rel="stylesheet" href="../assets/css/navbar.css">
    <link rel="stylesheet" href="../assets/css/footer.css">
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
                    <p>You have 4 items</p>
                </div>
                <div class="yourCart__main">
                    <table class="yourCart__table">
                        <thead>
                            <tr>
                                <th></th>
                                <th></th>
                                <th>Product</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Subtotal</th>
                                <th>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td class="thumbnail"><img
                                        src="https://image.cellphones.com.vn/220x/media/catalog/product/8/0/800x800-1-640x640-5_2.png"
                                        alt=""></td>
                                <td>Iphone</td>
                                <td>1555</td>
                                <td>1</td>
                                <td>1555</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="order">
                <div class="order__title title">
                    <h2>TOTAL</h2>
                    <p>Ready to order</p>
                </div>
                <div class="order__main">
                    <div class="order__total">
                        <h4>Sub-total</h4>
                        <p>21.000.000 <u>đ</u></p>
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

</html>