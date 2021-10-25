<?php
    require_once 'Products.php'; 
    
    class Clients extends Products {
        public $codClients;
        public $discount = 0;

        function __construct($_codClients)
        {
            $this->codClients = $_codClients; 
        }

        function setClients($_codClients)
        {
            $this->codClients = $_codClients;
        }

        function getClients()
        {
            return $this->codClients;
        }

        function setDiscount($_discount) {
            $this->discount = $_discount;
            if ($_codClients = ['x1xx','z2zz', 'a3aa']) {
                $this->discount = 30;
                echo 'Sconto del 30% applicato.';
            } else {
                echo 'Prezzo base.';
            } 
        }

        function getDiscount() {
            return $this->discount;
        }
    }

    $myPrice2 = new Clients ('es89ggcz', 0, 'carta', 'as89bc');
    var_dump($myPrice2);

    $myPrice = new Clients('asf89cc3t7', 'plastica' );
    echo $myPrice->setDiscount('x1xx');
    var_dump($myPrice);

    
    

?>