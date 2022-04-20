<?php
  function getPost($key, $slash = '\'') {
    $value = '';
    if(isset($_POST[$key])) {
      $value = $_POST[$key];
      $value = str_replace($slash, "\\".$slash, $value);
    }
    
  return $value;
  }

  function getGet($key, $slash = '\'') {
  $value = '';
  if(isset($_GET[$key])) {
    $value = $_GET[$key];
    $value = str_replace($slash, "\\".$slash, $value);
  }

  return $value;
  }
  
  function getHref($value){
      $value = str_replace(['á','à', 'ạ', 'ả', 'ã'], 'a', $value);
      $value = str_replace(['ắ','ằ', 'ặ', 'ẳ', 'ẵ', 'ă'], 'a', $value);
      $value = str_replace(['ấ','ầ', 'ậ', 'ẩ', 'ẫ', 'â'], 'a', $value);
      $value = str_replace('đ', 'd', $value);
      $value = str_replace(['é','è', 'ẹ', 'ẻ', 'ẽ'], 'e', $value);
      $value = str_replace(['ế','ề', 'ệ', 'ể', 'ễ', 'ê'], 'e', $value);
      $value = str_replace(['í','ì', 'ị', 'ỉ', 'ĩ'], 'i', $value);
      $value = str_replace(['ó','ò', 'ọ', 'ỏ', 'õ'], 'o', $value);
      $value = str_replace(['ố','ồ', 'ộ', 'ổ', 'ỗ', 'ô'], 'o', $value);
      $value = str_replace(['ớ','ờ', 'ợ', 'ở', 'ỡ', 'ơ'], 'o', $value);
      $value = str_replace(['ú','ù', 'ụ', 'ủ', 'ũ'], 'u', $value);
      $value = str_replace(['ứ','ừ', 'ự', 'ử', 'ữ', 'ư'], 'u', $value);
      $value = str_replace(['ý','ỳ', 'ỵ', 'ỷ', 'ỹ'], 'y', $value);
      $value = str_replace(' ', '-', $value);
    return $value;
  }

?>