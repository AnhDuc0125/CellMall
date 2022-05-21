<?php include("inc/header.php") ?>
    <div class="container">
        <a href="index.php" class="btn btn-light mb-3"><< Go Back</a>
        <?php if (isset($_GET['status']) && $_GET['status'] == "created") : ?>
        <div class="alert alert-success" role="alert">
            <strong>Created</strong>
        </div>
        <?php endif ?>
        <?php if (isset($_GET['status']) && $_GET['status'] == "fail_create") : ?>
        <div class="alert alert-danger" role="alert">
            <strong>Fail Create</strong>
        </div>
        <?php endif ?>
        <!-- Create Form -->
        <div class="card border-danger">
            <div class="card-header bg-danger text-white">
                <strong><i class="fa fa-plus"></i> Add New Product</strong>
            </div>
            <div class="card-body">
                <form action="add.php" method="post">
                        <div class="form-group col-md-6">
                            <label for="name" class="col-form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="price" class="col-form-label">Price</label>
                            <input type="number" class="form-control" id="price" name="price" placeholder="Price" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="qty" class="col-form-label">Qty</label>
                            <input type="number" class="form-control" name="qty" id="qty" placeholder="Qty" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="image" class="col-form-label">Image</label>
                            <input type="text" class="form-control" name="image" id="image" placeholder="Image URL">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="note" class="col-form-label">Description</label>
                        <textarea name="description" id="" rows="5" class="form-control" placeholder="Description"></textarea>
                    </div>
                    <button type="submit" class="btn btn-success"><i class="fa fa-check-circle"></i> Save</button>
                    <div class="col-12">
                            <div class="form-group">
                                <label>Brand Name</label>
                                <select class="form-control brand_list" name="brand_id">
                                    <option value="">Select Brand</option>
                                    <?php
                                      foreach($brandList as $item) {
                                        echo '<option value="'. $item['id'] .'">'. $item['name'] .'</option>';
                                      }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>Category Name</label>
                                <select class="form-control category_list" name="category_id">
                                    <option value="">Select Category</option>
                                    <?php
                                      foreach($cateList as $item) {
                                        echo '<option value="'. $item['id'] .'">'. $item['name'] .'</option>';
                                      }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>Product Description</label>
                                <textarea class="form-control" name="product_desc"
                                    placeholder="Enter product desc"></textarea>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>Product Oldprice</label>
                                <input type="number" name="product_oldPrice" class="form-control"
                                    placeholder="Enter Product OldPrice">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>Product Resolution</label>
                                <input type="text" name="product_resolution" class="form-control"
                                    placeholder="Enter Product Resolution">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>Product Image</label>
                                <input type="text" name="product_image" class="form-control"
                                    placeholder="Enter Product Image URL">
                            </div>
                            </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>Product discount</label>
                                <input type="number" name="product_discount" class="form-control"
                                    placeholder="Enter Product discount">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>Product status</label>
                                <input type="text" name="product_status" class="form-control"
                                    placeholder="Enter Product status">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>Product storage</label>
                                <input type="text" name="product_Storage" class="form-control"
                                    placeholder="Enter Product Storage">
                            </div>
                            </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>Product camera</label>
                                <input type="number" name="product_Camera" class="form-control"
                                    placeholder="Enter Product Camera">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>Product chip</label>
                                <input type="text" name="product_chip" class="form-control"
                                    placeholder="Enter Product Chip">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>Product Battery</label>
                                <input type="text" name="product_Battery" class="form-control"
                                    placeholder="Enter Product Image URL">
                        </div>
                        <input type="hidden" name="add_product" value="1">
                        <div class="col-12">
                            <button type="button" class="btn btn-primary add-product">Add Product</button>
                
                </form>
            </div>
        </div>
        <!-- End create form -->
        <br>
    </div><!-- /.container -->
<?php include("templates/footer.php") ?>