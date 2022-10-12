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
      <h3>
        <?php echo $product->id; ?>
      </h3>
      <h3>
        <i>
          <?php echo $product->maker; ?>
        </i>
      </h3>
      <div>
        <?php echo $product->ratings ?> Rating
      </div>
      <p>
        <?php echo $produc->description ?>
      </p>
      <h3>
        <?php echo $product->url; ?>
      </h3>
    </div>
  <?php endforeach; ?>
</div>

<body>
</body>

</html>