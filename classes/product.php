<?php

    require_once __DIR__.'/category.php';

    class Product {

        public $name;
        public $description;
        public $price;
        public $category; // Cani o Gatti
        public $type; // Prodotto, Cibo, Gioco, Cuccia
        public $image;

        function __construct($name, $description, $price, Category $category, $type, $image) {

            $this->name = $name;
            $this->description = $description;
            $this->price = $price;
            $this->category = $category;
            $this->type = $type;
            $this->image = $image;

        }

        public function print(){

            echo "<li><strong>Categoria: </strong>".$this->category."</li>";
            echo "<li><strong>".$this->name."</strong></li>";
            echo "<li><img src='".$this->image.'" alt"'.$this->name."'/></li>";
            echo "<li><strong>Prezzo: </strong>".$this->price."</li>";
            echo "<li><strong>Descrizione: </strong>".$this->description."</li>";
            echo "<li><strong>Tipo: </strong>".$this->type."</li>";

        }
    }

?>