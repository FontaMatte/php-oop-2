<?php

    trait UserSubscribeDiscount {

        protected $discount = 0.2;

        public function getDiscount() {

            return $this->discount;

        }

        public function setDiscount($discount) {

            $this->discount = $discount;
            
        }

        public function discount($price) {

            return $price - ($price * $this->getDiscount());

        }

    }