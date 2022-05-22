<?php
  require_once("../database/dbContext.php");
  require_once("../database/utility.php");

  $method = getPost('method');
  $id = getPost('id');

  switch($method) {
      case 'remove':
        $removeSQL = "DELETE FROM products WHERE id = ".$id;
        execute($removeSQL);
  }
?>