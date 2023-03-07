<?php
    class Customer {

        private $name;
        private $email;
        private $address;

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

        public function getAddress() {
            return $this->address;
        }

    }

?>