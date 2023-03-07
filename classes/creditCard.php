<?php
    class CreditCard {

        private $number;
        private $expiration;
        private $cvc;
    
        public function __construct(int $number, $expiration, int $cvc) {
            $this->number = $number;
            $this->expiration = $expiration;
            $this->cvc = $cvc;
            
            // verifico che la carta non sia scaduta
            $today = new DateTime();
            if ($today > $this->expiration) {
                throw new Exception("La carta di credito è scaduta");       
            }

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

    }

?>