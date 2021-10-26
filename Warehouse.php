<?php
    require_once 'Products.php'; 
    
    class Warehouse extends Products {
        public $quantity;

        public function __construct($_codProduct, $_category, $_quantity) 
        {
            parent::__construct($_codProduct, $_category);
            $this->quantity = $_quantity;
        }

        function setQuantity($_quantity)
        {
            $this->quantity = $_quantity;
        }

        function getQuantity()
        {
            return $this->quantity;
        }
    }

    $myWarehouse = new Warehouse('aaabbbccc', 'ferro', 10);
    // echo $myWarehouse->setQuantity(9);
    var_dump($myWarehouse);

?>

