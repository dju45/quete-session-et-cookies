<?php
session_start();
$items = $_SESSION['cart'];
require 'inc/head.php'; ?>
<section class="cookies container-fluid">
    <h1>Your cart: </h1>
    <div class="row">
        <?php foreach ($items as $item) : ?>
            <div class="col-md-3">
                <div class="thumbnail">
                    <img src="<?= $item ?>" alt="" >
                    <div class="caption">
                    </div>
                </div>
            </div>
        <?php endforeach; ?>

    </div>

</section>
<?php require 'inc/foot.php'; ?>
