<!-- Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online.
Ad esempio, ci saranno sicuramente dei prodotti da acquistare e degli utenti che fanno shopping.
Strutturare le classi gestendo l'ereditarietà dove necessario.
Ci potrebbero essere degli utenti premium che hanno diritto a degli sconti esclusivi,
oppure diverse tipologie di prodotti. -->

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
                echo 'Codice prodotto non valido';
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
    // echo $myProduct->setCod('aaa89cf');
    // echo $myProduct->setCategory('lavoro');

    

?>
