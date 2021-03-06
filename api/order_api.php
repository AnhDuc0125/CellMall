<?php
  session_start();

  if(!isset($_SESSION['currentUser'])) {
      header("Location: loginPage.php");  
  }
    
  $id = '';

  require_once("../database/dbContext.php");
  require_once("../database/utility.php");

  $method = getPost('method');
  $date = date('Y-m-d H:i:s');
  $userId = $_SESSION['currentUser']['id'];
  $id = getPost('id');

  //get price
  $productSQL = "SELECT * FROM products WHERE id = '$id'"; 
  $productResult = executeResult($productSQL, true);

  switch ($method) {
      case 'add':
          $addSQL = "INSERT INTO order_items (product_id, quantity, price, total_price, created_at, updated_at, user_id) VALUES ('$id', '1', '". $productResult['price'] ."', '". $productResult['price'] ."', '$date', '$date', '$userId')";
          execute($addSQL);
          break;
      
      case 'remove':
          $removeSQL = "DELETE FROM order_items WHERE id = '$id'";
          execute($removeSQL);
          break;
          
      case 'plus':
          $q = getPost('q');
          $plusSQL = "UPDATE order_items SET quantity = '$q', total_price = price * '$q' WHERE id = '$id'";
          execute($plusSQL);
          echo $plusSQL;
          break;
          
      case 'minus':
          $q = getPost('q');
          $minusSQL = "UPDATE order_items SET quantity = '$q', total_price = price * '$q' WHERE id = '$id'";
          execute($minusSQL);
          echo $minusSQL;
          break;

      case 'checkout':
          $user_id = getPost('user_id');
          $checkoutSQL = "DELETE FROM order_items WHERE user_id = '$user_id'";
          execute($checkoutSQL);
  }

?>