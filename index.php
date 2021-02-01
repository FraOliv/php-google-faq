<!-- Istruzioni:
Riscrivere questa pagina del sito google
https://policies.google.com/faq.
Ci sono diverse domande con relative risposte.
Gestire il “Database” e la visualizzazione di queste domande e risposte con PHP. -->

<?php
@include "data.php";


foreach ($data as $content) {
  /*   var_dump($content); */
    foreach($content as $element){
        var_dump($element);
    }
    
  
}

?>
