<?php

    require_once __DIR__. '/customer.php';
    require_once __DIR__. '/../traits/sconto.php';

    class SubscribeCustomer extends Customer {

        use UserSubscribeDiscount; //utilizzo del trait

        public function __construct($name, $email) {

            parent::__construct($name, $email);

        }
        
    }

?>