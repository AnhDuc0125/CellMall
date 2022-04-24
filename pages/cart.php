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
                    <p>You have 3 item(s)</p>
                </div>
                <div class="yourCart__main">
                    <table class="yourCart__table">
                        <tr class="yourCart__product">
                            <td class="thumbnail"><img
                                    src="https://image.cellphones.com.vn/220x/media/catalog/product/i/p/iphone-se-red-select-20220322.jpg"
                                    alt=""></td>
                            <td class="detail">
                                <h3 class="detail__title">Iphone SE 2022</h3>
                                <div class="detail__storage">512 GB</div>
                            </td>
                            <td class="quantity">
                                <div class="quantityBox">
                                    <ion-icon class="quantity__btn subtraction__btn" name="remove-outline"></ion-icon>
                                    <input type="number" min="1" max="3" class="quantityForm" value="1" readonly>
                                    <ion-icon class="quantity__btn addition__btn" name="add-outline"></ion-icon>
                                </div>

                            </td>
                            <td class="price">21.000.000 đ</td>
                            <td class="remove">
                                <ion-icon name="trash-outline"></ion-icon>
                            </td>
                        </tr>
                        <tr class="yourCart__product">
                            <td class="thumbnail"><img
                                    src="https://image.cellphones.com.vn/220x/media/catalog/product/i/p/iphone_11_white_4_.png"
                                    alt=""></td>
                            <td class="detail">
                                <h3 class="detail__title">Iphone 11</h3>
                                <div class="detail__storage">64 GB</div>
                            </td>
                            <td class="quantity">
                                <div class="quantityBox">
                                    <ion-icon class="quantity__btn subtraction__btn" name="remove-outline"></ion-icon>
                                    <input type="number" min="1" max="3" class="quantityForm" value="2" readonly>
                                    <ion-icon class="quantity__btn addition__btn" name="add-outline"></ion-icon>
                                </div>

                            </td>
                            <td class="price">21.000.000 đ</td>
                            <td class="remove">
                                <ion-icon name="trash-outline"></ion-icon>
                            </td>
                        </tr>
                        <tr class="yourCart__product">
                            <td class="thumbnail"><img
                                    src="https://image.cellphones.com.vn/220x/media/catalog/product/i/p/iphone_13-_pro-5_4.jpg"
                                    alt=""></td>
                            <td class="detail">
                                <h3 class="detail__title">iPhone 13 Pro Max</h3>
                                <div class="detail__storage">128 GB</div>
                            </td>
                            <td class="quantity">
                                <div class="quantityBox">
                                    <ion-icon class="quantity__btn subtraction__btn" name="remove-outline"></ion-icon>
                                    <input type="number" min="1" max="3" class="quantityForm" value="3" readonly>
                                    <ion-icon class="quantity__btn addition__btn" name="add-outline"></ion-icon>
                                </div>

                            </td>
                            <td class="price">21.000.000 đ</td>
                            <td class="remove">
                                <ion-icon name="trash-outline"></ion-icon>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="order">
                <div class="order__title title">
                    <h2>TOTAL</h2>
                    <p>Ready to delivery</p>
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
<script>
let quantityBox = document.querySelectorAll('.quantityBox');

quantityBox.forEach((item) => {
    item.onclick = (e) => {
        let quantityValue = item.querySelector('.quantityForm');
        let addBtn = item.querySelector('.addition__btn');
        let subBtn = item.querySelector('.subtraction__btn');

        switch (e.target) {
            case addBtn:
                if (quantityValue.value < 3) {
                    quantityValue.value++;
                }
                break;

            case subBtn:
                if (quantityValue.value > 1) {
                    quantityValue.value--;
                }
                break;

            default:
                break;
        }
    }
})
</script>

</html>