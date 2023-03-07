<?php

    require_once __DIR__. '/product.php';

    class Toy extends Product {
        private $animalSize;
        private $material;

        public function __construct($name, $description, $price, Category $category, $type, $image, $animalSize, $material) {

            parent::__construct($name, $description, $price, $category, $type, $image);

            $this->animalSize = $animalSize;
            $this->material = $material;
        }

        public function getAnimalSize() {
        return $this->animalSize;
        }

        public function getMaterial() {
        return $this->material;
        }

    }

?>