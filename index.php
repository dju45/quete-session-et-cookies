<?php
session_start();

if (!isset($_SESSION['client'])) {
    header('Location: login.php');
    exit();
}
if (!isset($_SESSION['cart'])) {
    $_SESSION ['cart']= array();
}
if (isset($_POST['addtocart'])) {
    $articleid = $_POST['addtocart'];
    $_SESSION['cart'][]= $articleid;
}
require 'inc/head.php';

?>

<section class="cookies container-fluid">
  <div class="row">
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
      <figure class="thumbnail text-center">
        <img src="assets/img/product-46.jpg" alt="cookies choclate chips" class="img-responsive">
        <figcaption class="caption">
          <h3>Pecan nuts</h3>
          <p>Cooked by Penny !</p>
            <form action="" method="post">
                <input type="hidden" name="addtocart" value="assets/img/product-46.jpg" />
                <button type="submit"  class="glyphicon glyphicon-plus btn btn-primary">Add to cart</button>
            </form>
        </figcaption>
      </figure>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
      <figure class="thumbnail text-center">
        <img src="assets/img/product-36.jpg" alt="cookies choclate chips" class="img-responsive">
        <figcaption class="caption">
          <h3>Chocolate chips</h3>
          <p>Cooked by Bernadette !</p>
            <form action="" method="post">
                <input type="hidden" name="addtocart" value="assets/img/product-36.jpg" />
                <button type="submit"  class="glyphicon glyphicon-plus btn btn-primary">Add to cart</button>
            </form>
        </figcaption>
      </figure>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
      <figure class="thumbnail text-center">
        <img src="assets/img/product-58.jpg" alt="cookies choclate chips" class="img-responsive">
        <figcaption class="caption">
          <h3>Chocolate cookie</h3>
          <p>Cooked by Bernadette !</p>
            <form action="" method="post">
                <input type="hidden" name="addtocart" value="assets/img/product-58.jpg" />
                <button type="submit"  class="glyphicon glyphicon-plus btn btn-primary">Add to cart</button>
            </form>
        </figcaption>
      </figure>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
      <figure class="thumbnail text-center">
        <img src="assets/img/product-32.jpg" alt="cookies choclate chips" class="img-responsive">
        <figcaption class="caption">
          <h3>M&M's&copy; cookies</h3>
          <p>Cooked by Penny !</p>
            <form action="" method="post">
                <input type="hidden" name="addtocart" value="assets/img/product-32.jpg" />
                <button type="submit"  class="glyphicon glyphicon-plus btn btn-primary">Add to cart</button>
            </form>
        </figcaption>
      </figure>
    </div>
  </div>
</section>
<?php require 'inc/foot.php'; ?>
