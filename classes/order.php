<?php

    require_once __DIR__.'/customer.php';
    require_once __DIR__.'/cart.php';
    require_once __DIR__.'/creditCard.php';

    class Order {
        private $customer;
        private $cart;
        private $creditCard;
        private $date;

        public function __construct(Customer $customer, Cart $cart, CreditCard $creditCard) {
            $this->customer = $customer;
            $this->cart = $cart;
            $this->creditCard = $creditCard;
            $this->date = date('Y-m-d H:i:s');
        }

        public function getCustomer() {
            return $this->customer;
        }

        public function getCart() {
            return $this->cart;
        }

        public function getDate() {
            return $this->date;
        }

        public function getCreditCard() {
            return $this->creditCard;
        }
        
    }

?>