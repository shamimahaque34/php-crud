<?php include 'includes/header.php'; ?>

<section class="py-5">
    <div class="container">
        <div class="row">
            <?php foreach ($products as $product) { extract($product) ?>
            <div class="col-md-3 mb-4">
                <div class="card">
                    <img src="<?php echo $image; ?>" alt="" height="240" class="card-img-top">
                    <div class="card-body">
                        <h4><?php echo $name; ?></h4>
                        <h5><?php echo $price; ?></h5>
                        <a href="action.php?status=detail&id=<?php echo $id; ?>" class="btn btn-outline-info">Detail</a>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>