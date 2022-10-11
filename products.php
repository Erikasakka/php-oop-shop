<?php

require_once('./classes/Product.php');
//TODO: add products list page
$products = Product::getProducts('./data/products.json');

?>

<html>

<head>
  <title>
    Products list
  </title>
</head>


<div>
  <form method="get" action="product.php">
    <input type="text" name="id" />
    <button type="submit">Find</button>
  </form>
  <?php foreach ($products as $product) : ?>
    <div>
      <h3>
        <?php echo $product->title; ?>
      </h3>
      <span>
        <?php echo $product->price; ?> Eur
      </span>
      <div>
        <img src="<?php echo $product->images[0] ?>">
      </div>
    </div>
  <?php endforeach; ?>
</div>

<body>
</body>

</html>