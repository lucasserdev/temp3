<?php

class Product {

    private $id;
    private $name;
    private $price;
    private $category;
    private $registration_date;

    public function getId() {
        return $this->id;
    }
    public function setId($id) {
        $this->id = $id;
    }

    public function getName() {
        return $this->name;
    }
    public function setName($name) {
        $this->name = $name;
    }

    public function getPrice() {
        return $this->price;
    }
    public function setPrice($price) {
        $this->price = str_replace(',', '.', number_format($price, 2, ',', '.'));
    }

    public function getCategory() {
        return $this->category;
    }
    public function setCategory($category) {
        $this->category = $category;
    }

    public function getRegistrationDate() {
        return $this->registration_date;
    }
    public function setRegistrationDate($date) {
        $this->registration_date = $date;
    }
}
