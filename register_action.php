<?php
require 'config.php';
require 'src/dao/ProductDaoMySql.php';

$productDao = new ProductDaoMySql($pdo);

$name = filter_input(INPUT_POST, 'name');
$price = filter_input(INPUT_POST, 'price');
$category = filter_input(INPUT_POST, 'category');

if($name && $price && $category) {

    $p = new Product();
    $p->setName($name);
    $p->setPrice($price);
    $p->setCategory($category);

    $productDao->add($p);

    header("Location: index.php");
    exit;

} else {

    header("Location: register.php");
    exit;
}