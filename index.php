<!-- Istruzioni:
Riscrivere questa pagina del sito google
https://policies.google.com/faq.
Ci sono diverse domande con relative risposte.
Gestire il “Database” e la visualizzazione di queste domande e risposte con PHP. -->

<?php
@include "data.php";

/* 
foreach ($data as $content) {
    /*   var_dump($content); */
//foreach ($content as $element) {
/*   var_dump($element); */
//  $result .= $element;
//}
//} */

?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" href="style.css">
    <title>google faq</title>


</head>

<body>
    <header>
        <div class="header">

            <div id="site_logo">
                <img src="Google-Logo.png" alt="">
                <span>Privacy e termini</span>
            </div>
            <div class="navbar">
                <div class="menu">
                    <div class="menu-button bt1 unselectable">
                        <p>Introduzione</p>
                    </div>
                    <div class="menu-button bt2 unselectable">
                        <p>Norme sulla privacy</p>
                    </div>
                    <div class="menu-button bt3 unselectable">
                        <p>Tecnlogie</p>
                    </div>
                    <div class="menu-button bt4 unselectable">
                        <p>Domande frequenti</p>
                    </div>
                </div>

            </div>
        </div>




        </div>

    </header>


    <main>

        <main>
            <div id="container">
                <?php

            foreach ($data as $content) { ?>
                <h2><?php echo $content['question']?> </h2>
                <br>
                <br>

                <?php 
                   $cutanswer =  explode("@", $content['answer']); 

                   foreach ($cutanswer as $answer) { ?>
                        <p><?php  echo $answer  ?></p>
                        <br>
                    
          
                <?php }
            }
        ?>

            </div>
        </main>


    </main>


    <footer>
    </footer>


</body>

</html>