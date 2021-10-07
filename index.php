<!-- Creare una variabile con un paragrafo di testo a vostra scelta.
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall'utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare. -->


<?php
    $text = 'Lorem ipsum dolor sit amet consectetur adipisicing ipsum elit. Asperiores harum omnis ipsum inventore! Aspernatur culpa amet optio. Vero deleniti ipsum optio nihil inventore distinctio, ipsum in blanditiis corrupti dolorum tempore ipsum dicta assumenda aut.';
    // $lenght = strlen($text);
    $badWord = $_GET['badWord'];
    $newText = str_replace($badWord, "***", $text);
?>


<h1><?php echo $text ?></h1> 
<h2>Lunghezza paragrafo: <?php echo strlen($text) ?></h2>
<h2>Parola da censurare: <?php echo $badWord ?></h2>
<h2><?php echo $newText ?></h2> 
<h2>Lunghezza paragrafo modificato: <?php echo strlen($newText) ?></h2>