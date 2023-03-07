<?php

    class Cart {

        private $products;

        function __construct (Array $products) {

            $this->products = $products;

        }

        public function getProducts() {
            return $this->products;
        }

        // FUNZIONE PER AGGIUNGERE AL CARRELLO
        public function addProduct($product) {
            $this->products[] = $product;
        }

        // FUNZIONE PER RIMUOVERE DAL CARRELLO
        public function removeProduct($product) {
            $key = array_search($product, $this->products);
            if ($key !== false) {
                unset($this->products[$key]);
            }
        }

        // FUNZIONE PER OTTENERE IL TOTALE DEL CARRELLO
        public function getTotal() {
            $total = 0;
            foreach ($this->products as $product) {
                $total += $product->getPrezzo();
            }
            return $total;
        }

        // FUNZIONE PER SVUOTARE IL CARRELLO
        public function emptyCart() {
            $this->products = array();
        }
    }

?>