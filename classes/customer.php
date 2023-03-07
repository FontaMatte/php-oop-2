<?php
    class Customer {

        private $name;
        private $email;
        private $paymentCard = false;

        public function __construct($name, $email) {

            $this->name = $name;
            $this->email = $email;

        }

        public function getName() {
            return $this->name;
        }

        public function getEmail() {
            return $this->email;
        }

        public function getPaymentCard($paymentCard) {

            $this->paymentCard = $paymentCard;
        }

        public function setPaymentCard() {
            return $this->paymentCard;
        }

    }

?>