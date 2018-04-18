<?php
session_start();
if (!isset($_COOKIE['pseudo'])) {
    header('Location: login.php');
    exit();
}
$items = $_SESSION['cart'];
$cakeNames = [
    'assets/img/product-46.jpg' => 'Pecan nuts',
    'assets/img/product-36.jpg' => 'Chocolate cookie',
    'assets/img/product-58.jpg' => 'Chocolate Chips',
    'assets/img/product-32.jpg' => 'M&M\'s&copy; cookies',
];

require 'inc/head.php'; ?>

<section class="cookies container-fluid">
    <h1>Your cart: </h1>
    <div class="row">
        <?php foreach ($items as $item) : ?>
            <?php foreach ($cakeNames as $id=> $cakeName ) : ?>
                <?php if ($item == $id) : ?>
            <div class="col-md-3">
                <div class="thumbnail">
                    <img src="<?= $item ?>" alt="" >
                    <div class="caption"><?= $cakeName ?>
                    </div>
                </div>
            </div>
                <?php endif; ?>
            <?php endforeach; ?>
        <?php endforeach; ?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
