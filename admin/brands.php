<?php
  require_once("../database/dbContext.php");
  require_once("../database/utility.php");

  if(!isset($_SESSION['adminAccount'])) {
    header("Location: login.php");
  }

  if(!empty($_POST)) {
      $date = date('Y-m-d H:i:s');
      if(isset($_POST['brand_name'])) {
        $brandName = getPost('brand_name');
        $addBrandSQL = "INSERT INTO brands (name, created_at, updated_at) VALUES ('$brandName', '$date', '$date')";
        execute($addBrandSQL);
        header("Refesh: 0");
      } 

      if(isset($_POST['cate_name'])) {
        $cateName = getPost('cate_name');
        $addCateSQL = "INSERT INTO categories (name, created_at, updated_at) VALUES ('$cateName', '$date', '$date')";
        execute($addCateSQL);
        header("Refesh: 0");
    } 
  }

  //get brand list
  $brandSQL = "SELECT * FROM brands";
  $brandList = executeResult($brandSQL);

    //get category list
    $cateSQL = "SELECT * FROM categories";
    $cateList = executeResult($cateSQL);
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
                <h1 class="my-0">Brand & Category Manager</h1>
            </div>
            <div class="col-3 my-auto">
                <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addBrandModal">Add
                    Brand</button>
                <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addCateModal">Add
                    Category</button>
            </div>
        </div>
    </div>

    <!-- Table -->
    <div class="row mx-auto" style="width: 85%">
        <div class="col-7">
            <table class="table table-striped table-bordered container">
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
                                <td><button class="btn btn-warning"><i class="bx bxs-pencil" ></i></button></th>
                                <td><button class="btn btn-danger" onclick="removeBrand('. $item['id'] .')"><i class="bx bx-trash" ></i></button></th>
                                </tr>';
                                }
                            }
                        ?>
            </table>
        </div>
        <div class="col-5">
            <table class="table table-striped table-bordered container">
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
                        <td><button class="btn btn-warning"><i class="bx bxs-pencil" ></i></button></th>
                        <td><button class="btn btn-danger" onclick="removeCate('. $item['id'] .')"><i class="bx bx-trash" ></i></button></th>
                        </tr>';
                        }
                    }
                    ?>
            </table>
        </div>
    </div>


    <!-- Table -->

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
                            <label>Name Brand:</label>
                            <input name="brand_name" type="text" class="form-control">
                        </div>
                        <button class="btn btn-success">Add Brand</button>
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
                            <label>Name Category:</label>
                            <input name="cate_name" type="text" class="form-control">
                        </div>
                        <button class="btn btn-success">Add Category</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Aside-end -->
    <?php
      include_once("./layouts/aside_end.php");
    ?>
</body>
<script>
function removeBrand(id) {
    if (id > 8) {
        let request = confirm("Do you want to remove this brand?");

        if (request) {
            $.post("../api/db_api.php", {
                'id': id,
                'method': 'remove_brand',
                function(data) {
                    location.replace('brands.php');
                }
            })
        }
    } else {
        alert("You can't remove this brand now!!!")
    }
}

function removeCate(id) {
    if (id > 3) {
        let request = confirm("Do you want to remove this category?");

        if (request) {
            $.post("../api/db_api.php", {
                'id': id,
                'method': 'remove_cate',
                function(data) {
                    location.replace('brands.php');
                }
            })
        }
    } else {
        alert("You can't remove this category now!!!")
    }
}
</script>

<!-- Footer -->
<?php
  include_once("./layouts/footer.php");
?>