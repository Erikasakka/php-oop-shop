<?php

require_once dirname(__FILE__) . '/../support/FileReader.php';

class Product
{
    // TODO: add missing parameters
    public $id;
    public $maker;
    public $images = [];
    public $url;
    public $title;
    public $description;
    public $price;
    public $ratings = [];

    public function __construct(
        string $id,
        string $maker,
        array $images,
        string $url,
        string $title,
        string $description,
        float $price,
        ?array $ratings
    ) {
        //TODO: finish __construct()
        $this->id = $id;
        $this->maker = $maker;
        $this->images = $images;
        $this->url = $url;
        $this->title = $title;
        $this->description = $description;
        $this->price = $price;
        $this->ratings = $ratings;
    }

    public static function find($id): Product|null
    {
        // How to load data:

        $content = Product::getProducts('./data/products.json');
        $product = null;
        foreach ($content as $p) {
            if ($p->id  == $id) {
                $product = $p;
            }
        }
        return $product;
        // TODO: check if given product exists, if exists return as object else return false
    }

    public static function getProducts($path): array
    {
        $content = FileReader::readJsonFile($path, true);

        $products = [];

        if (!$content) {
            return $products;
        }

        foreach ($content as $product) {
            $products[] = new static(
                $product['id'],
                $product['maker'],
                $product['images'],
                $product['url'],
                $product['title'],
                $product['description'],
                $product['price'],
                $product['ratings']
            );
        }

        return $products;
    }
}
