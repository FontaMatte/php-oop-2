<?php

    class Product {

        public $name;
        public $description;
        public $price;
        public $category; // Cani o Gatti
        public $type; // Prodotto, Cibo, Gioco, Cuccia
        public $image;

        function __construct($name, $description, $price, $category, $type, $image) {

            $this->name = $name;
            $this->description = $description;
            $this->price = $price;
            $this->category = $category;
            $this->type = $type;
            $this->image = $image;
            
        }
    }

?>