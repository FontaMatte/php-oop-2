<?php
    class CartaDiCredito {
        
        private $number;
        private $expiration;
        private $cvc;
    
        public function __construct($number, $expiration, $cvc) {
            $this->number = $number;
            $this->expiration = $expiration;
            $this->cvc = $cvc;
        }
    
        public function getNumber() {
            return $this->number;
        }
    
        public function getDataExpiration() {
            return $this->expiration;
        }

        public function getDataCvc() {
            return $this->cvc;
        }
    
        public function isScaduta() {
            $today = new DateTime();
            return $this->expiration < $today;
        }
    }

?>