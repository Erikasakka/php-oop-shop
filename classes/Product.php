<?php

require_once dirname(__FILE__) . '/../support/FileReader.php';

class Product
{
    // TODO: add missing parameters
    public $id;
    public $maker;
    public $images;
    public $url;
    public $title;
    public $description;
    public $price;
    public $ratings;

    public function __construct(int $id, mixed $maker, array $images, mixed $url, string $title, mixed $description, float $price, mixed $ratings)
    {
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

    public static function find($id)
    {
        // How to load data:
        $content = Product::getProducts('./data/products.json');

        // TODO: check if given product exists, if exists return as object else return false
    }

    public static function getProducts($path)
    {
        $content = FileReader::readJsonFile($path, true);

        $products = [];

        if (!$content) {
            return $products;
        }

        foreach ($content as $product) {
            $products[] = new static($product['title']);
        }

        return $products;
    }
}
