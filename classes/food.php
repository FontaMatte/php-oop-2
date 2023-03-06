<?php

    require_once __DIR__. '/product.php';

    class Food extends Product {
        public $quantity;
        public $animalAge;
        public $expirationDate;

        function __construct($name, $description, $price, Category $category, $type, $image, $quantity, $animalAge, $expirationDate) {

            parent::__construct($name, $description, $price, $category, $type, $image);

            $this->quantity = $quantity;
            $this->animalAge = $animalAge;
            $this->expirationDate = $expirationDate;
        }

    }

?>