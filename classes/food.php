<?php

    require_once __DIR__. '/product.php';

    class Food extends Product {
        
        private $quantity;
        private $animalAge;
        private $expirationDate;

        function __construct($name, $description, $price, Category $category, $type, $image, $quantity, $animalAge, $expirationDate) {

            parent::__construct($name, $description, $price, $category, $type, $image);

            $this->quantity = $quantity;
            $this->animalAge = $animalAge;
            $this->expirationDate = $expirationDate;
        }

        public function getQuantity() {
            return $this->quantity;
        }

        public function getAnimalAge() {
            return $this->animalAge;
        }

        public function getExpirationDate() {
            return $this->expirationDate;
        }

    }

?>