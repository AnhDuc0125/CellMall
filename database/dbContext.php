<?php
  require_once("config.php");

  function execute($query) {
	$conn = mysqli_connect(HOST, ROOT, PASSWORD, DATABASE);
	mysqli_set_charset($conn, 'utf8');

	mysqli_query($conn, $query);

	mysqli_close($conn);
}

function executeResult($query, $isOnly = false) {
	$conn = mysqli_connect(HOST, ROOT, PASSWORD, DATABASE);
	mysqli_set_charset($conn, 'utf8');

	$result = mysqli_query($conn, $query);

    if($isOnly == true) {
        $data = mysqli_fetch_assoc($result);
        
        return $data;
    }
    
    $data = [];
    while(($row = mysqli_fetch_assoc($result)) != null) {
        $data[] = $row;
    }
    mysqli_close($conn);

    return $data;
}
?>