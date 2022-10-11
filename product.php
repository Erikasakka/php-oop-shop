<?php

require_once 'classes/Product.php';
$product = null;
if (isset($_GET['id'])) {
    $product = Product::find($_GET['id']);
}
?>

<html>

<head>
    <title>
        Product
    </title>
</head>


<div>
    <?php if ($product) : ?>
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
    <?php else : ?>
        <div>
            <span>
                not found
            </span>
        </div>
    <?php endif; ?>
</div>

<body>
</body>

</html>