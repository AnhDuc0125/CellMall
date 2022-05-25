<?php
  require_once("../database/dbContext.php");
  require_once("../database/utility.php");

  $method = getPost('method');
  $id = getPost('id');

  switch($method) {
      case 'remove_product':
        $removeSQL = "DELETE FROM products WHERE id = ".$id;
        execute($removeSQL);
        break;

      case 'remove_brand':
        $removeSQL = "DELETE FROM brands WHERE id = ".$id;
        execute($removeSQL);
        break;  

      case 'remove_cate':
        $removeSQL = "DELETE FROM categories WHERE id = ".$id;
        execute($removeSQL);
        break;  
  }
?>