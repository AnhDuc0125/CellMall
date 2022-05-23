<?php
  require_once("../database/dbContext.php");
  require_once("../database/utility.php");

  //get brand list
  $brandSQL = "SELECT * FROM brands";
  $brandList = executeResult($brandSQL);

  //count brands
  $countSQL = "SELECT COUNT(*) FROM brands";
  $countResult = executeResult($countSQL, true);

    //get category list
    $cateSQL = "SELECT * FROM categories";
    $cateList = executeResult($cateSQL);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brands</title>
    <!-- Icon -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <!--bootstrap 5 and Jquery cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>

<body>
    <!-- Title -->
    <div class="bg-secondary">
        <div class="row">
            <div class="col-10">
                <h1>Brand Manager (<?=$countResult['COUNT(*)']?>)</h1>
            </div>
            <div class="col-2 my-auto">
                <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addBrandModal">Add
                    Brand</button>
                <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addCateModal">Add
                    Category</button>
            </div>
        </div>
    </div>

    <!-- Table -->
    <div class="row">
        <!-- Brands table -->
        <div class="col-8">
            <table class="table table-striped table-bordered">
                <tr class="table-dark">
                    <th>#</th>
                    <th>Name Brands</th>
                    <th colspan="2">Action</th>
                </tr>
                <?php
                    if(count($brandList) > 0) {
                        $index = 1;
                        foreach($brandList as $item) {
                            echo    '<tr>
                            <td>'. $index++ .'</th>
                            <td>'. $item['name'] .'</th>
                            <td><button class="btn btn-warning">Edit</button></th>
                            <td><button class="btn btn-danger" onclick="remove()"><ion-icon name="trash-outline"></ion-icon></button></th>
                            </tr>';
                            }
                        }
                    ?>
            </table>
        </div>
        <div class="col-4">
            <!-- Category table -->
            <table class="table table-striped table-bordered">
                <tr class="table-dark">
                    <th>#</th>
                    <th>Name Category</th>
                    <th colspan="2">Action</th>
                </tr>
                <?php
                if(count($cateList) > 0) {
                $index = 1;
                foreach($cateList as $item) {
                    echo    '<tr>
                    <td>'. $index++ .'</th>
                    <td>'. $item['name'] .'</th>
                    <td><button class="btn btn-warning">Edit</button></th>
                    <td><button class="btn btn-danger" onclick="remove()"><ion-icon name="trash-outline"></ion-icon></button></th>
                    </tr>';
                    }
                }
                ?>
            </table>
        </div>
    </div>

    <!-- Modal Box -->
    <div class="modal fade" id="addBrandModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Brands</h5>
                    <button class="btn btn-secondary" data-bs-dismiss="modal">X</button>
                </div>
                <div class="modal-body">
                    <form method="post">
                        <div class="form-group mb-2">
                            <label>Name</label>
                            <input name="name" type="text" class="form-control">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="addCateModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Category</h5>
                    <button class="btn btn-secondary" data-bs-dismiss="modal">X</button>
                </div>
                <div class="modal-body">
                    <form method="post">
                        <div class="form-group mb-2">
                            <label>Name</label>
                            <input name="name" type="text" class="form-control">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
function remove() {
    alert("Sorry, can not delete brand now!")
}
</script>

</html>