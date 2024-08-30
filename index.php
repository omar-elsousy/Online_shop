<?php
include 'inc/header.php';
include_once("app.php");
$products=$product->getAll();
 ?>



<div class="container my-5">
    <div class="row">
    <?php foreach($products as $product){ ?>
    <div class="col-lg-4 mb-3">
            <div class="card">
            <img src="images/<?= $product['img'] ?>" class="card-img-top">
            <div class="card-body">
            <h5 class="card-title"><?= $product['name'] ?></h5>
            <p class="text-muted"><?= $product['price'] ?></p>
            <p class="card-text"><?= $str->limit($product['desc']) ?></p>
            <a href="show.php?id=<?= $product['id'] ?>" class="btn btn-primary">Show</a>
            <?php if($session->getSession("userId")){ ?>
            <a href="edit.php?id=<?= $product['id'] ?>" class="btn btn-info">Edit</a>
            <a href="handlers/handleDelete.php?id=<?= $product['id'] ?>" class="btn btn-danger">Delete</a>
            <?php } ?>
            </div>
        </div>
    </div>
    <?php } ?>
    </div>
</div>



<?php include 'inc/footer.php'; ?>