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
                            <h4 class="">MANAGE PRODUCT</h4>
                        </div>
                        <div class="card-body">
                            <h3 class="text-center text-danger">
                                <?php
                                    if (isset($_SESSION['message']))
                                    {
                                        echo $_SESSION['message'];
                                        unset($_SESSION['message']);
                                    }
                                ?>
                            </h3>
                            <h3 class="text-center text-success"><?php echo isset($_SESSION['message']) ? $_SESSION['message'] : ''; ?></h3>
                            <table class="table table-striped table-hover table-responsive-md text-center">
                                <thead>
                                <tr>
                                    <th>Product Name</th>
                                    <th>Product Price</th>
                                    <th>Stock Amount</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($products as $product) { extract($product) ?>
                                <tr>
                                    <td><?php echo $name ;?></td>
                                    <td><?php echo $price ;?></td>
                                    <td><?php echo $stock ;?></td>
                                    <td><img src="<?php echo $image; ?>" alt="" height="100" width="100"></td>
                                    <td>
                                        <a href="action.php?status=edit&id=<?php echo $id; ?>" class="btn btn-success">Edit</a>
                                        <a href="action.php?status=delete&id=<?php echo $id; ?>" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include 'includes/footer.php'; ?>