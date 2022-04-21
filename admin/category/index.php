<?php
    require_once("../../database/dbContext.php");
    require_once("../../database/utility.php");


    $sql = "select * from categories";
    $cateList = executeResult($sql);

    if(!empty($_POST)){
        if(isset($_POST['nameAdd'])){
            $name = getPost('nameAdd');
            $created = $updated = date("Y-m-d H:i:s");
    
            $insert = "insert into categories (name, created_at, updated_at) values ('$name', '$created', '$updated')";
            execute($insert);

            header("Refresh:0");
        }

        if(isset($_POST['nameEdit'])){
            $name = getPost('nameEdit');
            $id = getPost('id');
            $updated = date("Y-m-d H:i:s");
    
            $update = "update categories set name = '$name', updated_at = '$updated' where id = '$id'";
            execute($update);

            header("Refresh:0");
        }

        if(isset($_POST['action'])){
            $action = getPost('action');
            if($action == 'remove') {
                $id = getPost('id');
        
                $delete = "delete from categories where id = '$id'";
                execute($delete);
    
                header("Refresh:0");
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Category</title>
    <!--bootstrap 5 and Jquery cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <style>
    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        overflow: hidden;
    }

    input {
        border: none;
        padding: 5px 10px;
    }
    </style>
</head>

<body>

    <div class="row">
        <div class="col-8">
            <div class="card mx-2 my-5">
                <div class="card-header bg-primary text-light">Category List</div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <tr class="text-center">
                            <th style="width: 100px">No</th>
                            <th>Name</th>
                            <th colspan="2">Action</th>
                        </tr>
                        <?php
                        $index = 0;
                          foreach($cateList as $item) {
                            echo '<tr>
                                    <td>'. ++$index .'</td>
                                    <td>
                                        <form method="post">
                                            <input type="hidden" name="id" value="'. $item['id'] .'">
                                            <input name="nameEdit" id="'. $item['id'] .'" value="'. $item['name'] .'">
                                        </form>
                                    </td>
                                    <td class="text-center" style="width: 150px">
                                        <button class="btn btn-warning" onclick="edit('. $item['id'] .')">Edit</button>
                                    </td>
                                    <td class="text-center" style="width: 150px">
                                        <form method="post">
                                            <input type="hidden" name="id" value="'. $item['id'] .'">
                                            <button class="btn btn-danger" name="action" value="remove">Remove</button>
                                        </form>
                                    </td>
                                </tr>';
                          }
                        ?>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card mx-2 my-5">
                <div class="card-header bg-success text-light">Add new category</div>
                <div class="card-body">
                    <form method="POST">
                        <div class="form-floating mb-3">
                            <input required type="text" class="form-control" name="nameAdd" id="floatingInput"
                                placeholder="name@example.com">
                            <label for="floatingInput">Name</label>
                        </div>
                        <button type="submit" class="btn btn-success">Add</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
function edit(id) {
    let nameElement = document.querySelector(`input[id="${id}"]`);
    nameElement.setSelectionRange(0, nameElement.value.length);
    nameElement.focus();
}
</script>

</html>