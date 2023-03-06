<?php

    require_once __DIR__. '/product.php';

    class AnimalCare extends Product {
        public $quantity;
        public $expirationDate;

        function __construct($name, $description, $price, $category, $type, $image, $quantity, $expirationDate) {

            parent::__construct($name, $description, $price, $category, $type, $image);

            $this->quantity = $quantity;
            $this->expirationDate = $expirationDate;
        }
    }

?>