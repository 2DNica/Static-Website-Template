<?php

$nome = $_POST['nome'];
$email = $_POST['email'];
$messaggio = $_POST['messaggio'];



//Controlli
if ($nome == "") {
    header('location: ../index.php?invio=no');
    die();
}

$a = "denis@dwb.it";
$oggetto = "Email dal Modulo Contatti del sito web flow_cloud_dwb";
$messaggio = "
<h1>Messaggio dal sito:</h1>
<br>
<b>NOME:</b>
" . $nome . "
<br>
<b>EMAIL:</b>
" . $email . "
<br>
<b>MESSAGGIO:</b>
" . $messaggio . "
<br>
";

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From: denis@dwb.it' . "\r\n";

if (mail($a, $oggetto, $messaggio, $headers)) {
    header('location: ../contatti.php?invio=ok');
} else {
    //header('location: ../contatti.php?invio=no');
    $error = error_get_last();

    // Visualizza il messaggio di errore in italiano
    echo "Errore durante l'invio dell'email: " . $error['message'];
}

die();
