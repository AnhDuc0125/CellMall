<?php 
require("classes/Database.php");

if ($_POST) {
    $name    = trim($_POST['name']);
    $price   = (float) $_POST['price'];
    $qty     = (int) $_POST['qty'];
    $image   = trim($_POST['image']);
    $description = trim($_POST['description']);
    $brand = trim($_POST['product_brand']);
    $category = trim($_POST['product_category']);
    $oldPrice = trim($_POST['product_oldPrice');
    $resolution = trim($_POST['product_resolution']);
    $discount = trim($_POST['product_discount');
    $status = trim($_POST['product_status')];
    $storage = trim($_POST['product_storage']);
    $Camera = trim($_POST['product_camera']);
    $Chip = trim($_POST['product_chip']);
    $Battery = trim($_POST['product_battery']);
    try {
        $sql = 'INSERT INTO products(name, price, qty, image, description, brand_id, category_id, old_price, resolution, discount, status, storage, camera, chip, battery) 
                VALUES(:name, :price, :qty, :image, :description, :brand_id, :category_id, :old_price, :resolution, :discount, :status, :storage, :camera, :chip, :battery) )';

        $stmt = $conn->prepare($sql);
        $stmt->bindParam(":barcode", $barcode);
        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":price", $price);
        $stmt->bindParam(":qty", $qty);
        $stmt->bindParam(":image", $image);
        $stmt->bindParam(":description", $description);
        $stmt->bindParam(";product_oldPrice",$oldprice);
        $stmt->bindParam(":resolution", $product_resolution);
        $stmt->bindParam(":discount", $product_discount);
        $stmt->bindParam(":status", $product_status);
        $stmt->bindParam(":storage", $product_storage);
        $stmt->bindParam(":Camera", $product_camera);
        $stmt->bindParam(":Chip", $product_chip);
        $stmt->bindParam(":Battery", $product_battery);
        $stmt->execute();
        if ($stmt->rowCount()) {
            header("Location: create.php?status=created");
            exit();
        }
        header("Location: create.php?status=fail_create");
        exit();
    } catch (Exception $e) {
        echo "Error " . $e->getMessage();
        exit();
    }
} else {
    header("Location: create.php?status=fail_create");
    exit();
}
?>