<?php

    require_once __DIR__.'/customer.php';
    require_once __DIR__.'/cart.php';

    class Order {
        private $customer;
        private $cart;
        private $date;
        private $discount = 0;

        public function __construct(Customer $customer, Cart $cart) {
            $this->customer = $customer;
            $this->cart = $cart;
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

        public function getDiscount() {
            return $this->discount;
        }

        public function setDiscount($discount) {
            $this->discount = $discount;
        }

        public function discount($isRegistered) {
            if ($isRegistered == true) {
                return $this->discount = 20;
            }
            else {
                return $this->discount;
            }
        }

        public function OrderConfirmation($paymentValid) {

            
        }
    }

?>