<?php 
    class Products {
        public $codProduct;
        public $category;

        function __construct($_codProduct, $_category)
        {
            $this->codProduct = $_codProduct;
            $this->category = $_category;
        }

        function setCod($_codProduct)
        {
            $this->codProduct = $_codProduct;
            if (strlen($_codProduct) >= 4){
                echo 'Nuovo codice prodotto : ' . $_codProduct. '<br/>';
            } else {
                echo 'Nuovo codice prodotto non valido';
            }  
        }

        function getCod(){
            return $this->codProduct;
        }

        function setCategory($_category) {
            $this->category = $_category;
            echo 'Nuova Categoria prodotto : '. $_category;
        }

        function getCategory(){
            return $this->category;
        }
    }

    $myProduct = new Products('5b98tz', 'casa');
    var_dump($myProduct);

    //prova....
    // echo $myProduct->setCod('cf');
    // echo $myProduct->setCategory('lavoro');
    
    

?>