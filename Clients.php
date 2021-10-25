<?php
    require_once 'Products.php'; 
    
    class Clients extends Products {
        public $codClients;

        function setClients($_codClients)
        {
            $this->codClients = $_codClients;
        }

        function getClients()
        {
            return $this->codClients;
        }

    }

    $myPrice = new Clients ('as55b88gg', 'carta','a44x');
    echo $myPrice->setClients('xx4rz');
    var_dump($myPrice);

    $myPrice2 = new Clients('asf89cc3t7', 'plastica', 'x4er');
    echo $myPrice2->setClients('x1xx');
    var_dump($myPrice2);

    
    

?>