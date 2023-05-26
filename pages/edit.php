<?php include 'includes/header.php'; ?>
<?php
if (!isset($_SESSION['id']))
{
    header('Location: home.php');
}
?>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-10 mx-auto">
                    <div class="card">
                        <div class="card-header text-center">
                            <h4 class="">EDIT PRODUCT</h4>
                        </div>
                        <div class="card-body">
                            <h4 class="text-center text-success">
                                <?php echo isset($message) ? $message : ''; ?>
                            </h4>
                            <form action="action.php" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-3">Product Name</label>
                                    <div class="col-md-9">
                                        <input type="text" name="name" class="form-control" value="<?php echo $name; ?>"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-3">Product Price</label>
                                    <div class="col-md-9">
                                        <input type="number" name="price" class="form-control" value="<?php echo $price; ?>"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-3">Stock Amount</label>
                                    <div class="col-md-9">
                                        <input type="number" name="stock" class="form-control" value="<?php echo $stock; ?>"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-3">Product Description</label>
                                    <div class="col-md-9">
                                        <textarea name="description" class="form-control"><?php echo $description; ?></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-3">Product Image</label>
                                    <div class="col-md-9">
                                        <input type="file" name="image" class="form-control-file"/>
                                        <img src="<?php echo $image; ?>" alt="" width="100" height="100">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" name="updateBtn" class="btn btn-success btn-block" value="UPDATE"/>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include 'includes/footer.php'; ?>