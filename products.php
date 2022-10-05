<html>

<head>
  <title>
    Products list
  </title>
</head>


<?php

//require_once('./classes/Product.php');
//TODO: add products list page
$products = Product::getProducts('./data/products.json');
require_once('./classes/Product.php');
$products = [];
for ($i = 0; $i < 5; $i++) {
  $images = [
    'https://picsum.photos/200',
    'https://picsum.photos/200'
  ];
  $products[] = new Product(
    id;
    maker;
    images;
    url;
    title;
    description;
    price;
    ratings;
    title: 'product_name_' . $i,
    price: rand(1, 100),
    images: $images
  );
}
?>


<div>
  <?php foreach ($products as $product) : ?>
    <div>
      <h3>
        <?php echo $product->title; ?>
      </h3>
      <span>
        <?php echo $product->price; ?> Eur
      </span>
      <div>
        <?php foreach ($product->images as $image) : ?>
          <img src="<?php echo $image ?>">
        <?php endforeach; ?>
      </div>
    </div>
  <?php endforeach; ?>
</div>

<body>

</html>