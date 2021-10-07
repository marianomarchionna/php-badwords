<!-- Creare una variabile con un paragrafo di testo a vostra scelta.
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall'utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare. -->


<?php
    $text = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores harum omnis inventore! Aspernatur culpa amet optio. Vero deleniti optio nihil inventore distinctio, in blanditiis corrupti dolorum tempore dicta assumenda aut.';
    // $lenght = strlen($text);
?>


<h1><?php echo $text ?></h1>
<h2>Lunghezza paragrafo: <?php echo strlen($text) ?></h2>