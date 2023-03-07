<?php
    class Customer {

        private $name;
        private $email;
        private $isRegistered;
        private $discount = 0;

        public function __construct($name, $email, $isRegistered) {

            $this->name = $name;
            $this->email = $email;
            $this->isRegistered = $isRegistered;

        }

        public function getName() {
            return $this->name;
        }

        public function getEmail() {
            return $this->email;
        }

        public function isRegistered() {
            return $this->isRegistered;
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
    }

    $customer1 = new Customer('piero','pierogmail.com', false);

    var_dump($customer1);

    echo '</br>';

    var_dump($customer1->discount($customer1->isRegistered()));


?>