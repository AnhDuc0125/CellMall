<?php
  require_once("../database/dbContext.php");
  require_once("../database/utility.php");

  if(!isset($_SESSION['adminAccount'])) {
    header("Location: login.php");
  }

  //get order list
  $accountSQL = "SELECT * FROM users";
  $accountList = executeResult($accountSQL);

?>

<!-- Header -->
<?php
  include_once("./layouts/header.php");
?>

<body>
    <!-- Aside-start -->
    <?php
      include_once("./layouts/aside_start.php");
    ?>

    <!-- Title -->
    <div class="container">
        <div class="row my-2">
            <div class="col-9">
                <h1 class="my-0">Orders Manager</h1>
            </div>
        </div>
    </div>

    <!-- Table -->
    <div class="mx-auto" style="width: 85%">
        <table class="table table-striped table-bordered container">
            <tr class="table-dark">
                <th>#</th>
                <th>Fullname</th>
                <th>Username</th>
                <th>Phone</th>
                <th>Address</th>
                <th colspan="2">Action</th>
            </tr>
            <?php
                        if(count($accountList) > 0) {
                            $index = 1;
                            foreach($accountList as $item) {
                                echo    '<tr>
                                <td>'. $index++ .'</th>
                                <td>'. $item['fullname'] .'</th>
                                <td>'. $item['username'] .'</th>
                                <td>'. $item['phone'] .'</th>
                                <td>'. $item['address'] .'</th>
                                    <td><button class="btn btn-warning"><i class="bx bxs-pencil" ></i></button></th>
                                <td><button class="btn btn-danger" onclick="removeBrand('. $item['id'] .')"><i class="bx bx-trash" ></i></button></th>
                                </tr>';
                                }
                            }
                        ?>
        </table>
    </div>
    <!-- Aside-end -->
    <?php
      include_once("./layouts/aside_end.php");
    ?>
</body>

<!-- Footer -->
<?php
  include_once("./layouts/footer.php");
?>